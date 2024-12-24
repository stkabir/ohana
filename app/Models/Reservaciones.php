<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Tarifa;
use App\Models\ReservacionesDetalles;
use App\Models\ReservacionesDetallesTraslados;
use App\Models\ReservacionesPersonas;

class Reservaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio',
        'cliente_id',
        'numero_personas',
        'total'
    ];

    private static function creaReservacion($prefijo, $tarifa, $nombre, $apellido, $telefono, $email, $comentario, $numeroPersonas): int {
        $sql = 'CAST(replace(folio, "'.$prefijo. '","") AS UNSIGNED)';
        $nuevoFolio= static::orderByRaw($sql.' DESC')->limit(1)->value('folio');

        if(empty($nuevoFolio)) {
            $nuevoFolio = 0;
        }

        $cliente = Cliente::guardaCliente($nombre, $apellido, $telefono, $email, $comentario);

        $reservacion = static::create([
            'folio' => static::crearNuevoFolio($prefijo, str_replace($prefijo,'',$nuevoFolio) +1),
            'cliente_id' => $cliente->id,
            'numero_personas' => $numeroPersonas,
            'total' => $tarifa
        ]);

        return $reservacion->id;
    }

    public static function creaReservacionTrasporte($idaVuelta, $idTarifa, $nombre, $apellido, $telefono, $email, $comentario, $numeroPersonas, $personas, $fecha1, $hora1, $aerolinea1, $numeroVuelo1, $fecha2, $hora2, $aerolinea2, $numeroVuelo2) {
        DB::transaction(function () use ($idaVuelta, $idTarifa, $nombre, $apellido, $telefono, $email, $comentario, $numeroPersonas, $personas, $fecha1, $hora1, $aerolinea1, $numeroVuelo1, $fecha2, $hora2, $aerolinea2, $numeroVuelo2): void {
            $prefijo = 'TL';
            if($idaVuelta) {
                $prefijo .= '1';
            }
            $tarifa = Tarifa::findOrFail($idTarifa);

            $precioTarifa = static::obtieneTarifa($tarifa->pax1,$tarifa->precio1, $tarifa->precio2, $numeroPersonas);

            $idReservacion = static::creaReservacion($prefijo, $precioTarifa,$nombre, $apellido, $telefono, $email, $comentario, $numeroPersonas);
            
            ReservacionesPersonas::guardaPersonas($idReservacion, $personas);

            $idReservacionDetalles = ReservacionesDetalles::guardaReservacionesDetalles($idReservacion, $precioTarifa);

            ReservacionesDetallesTraslados::guardarReservacionesDetallesTraslados($idReservacionDetalles, $tarifa->origen_id, $tarifa->destino_id, $fecha1, $hora1, $aerolinea1, $numeroVuelo1);

            if($idaVuelta) {
                ReservacionesDetallesTraslados::guardarReservacionesDetallesTraslados($idReservacionDetalles, $tarifa->destino_id, $tarifa->origen_id, $fecha2, $hora2, $aerolinea2, $numeroVuelo2);
            }
        });
    }

    private static function crearNuevoFolio($prefijo, $ultimoFolio) {
        $cPrefijo = strlen($prefijo);
        $cUltimoFolio = strlen($ultimoFolio);
        $dato = $prefijo;
        for( $i = ($cPrefijo + $cUltimoFolio); $i<10; $i++) {
            $dato .= '0';
        }
        $dato .= $ultimoFolio;
        return $dato;
    }

    private static function obtieneTarifa($pax1, $precio1, $precio2, $numeroPersonas) {
        $splitPax = explode('-',$pax1);
        if(static::siEsEntrePax($splitPax[0], $splitPax[1], $numeroPersonas)) {
            return $precio1;
        }
        return $precio2;
    }

    private static function siEsEntrePax(int $num1, int $num2, $num3): bool {
        return $num3>=$num1 && $num3<=$num2;
    }
}