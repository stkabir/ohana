<?php

namespace App\Livewire\Publico\Componentes;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Tarifa;
use Redirect;
class ResultadosTrasportes extends Component
{
    public $cards = [];

    public function render(Request $request)
    {
        $params = $request->all();
        $this->buscaResultados($params);
        return view('livewire.publico.componentes.resultados-trasportes', ['parametros' => $params]);
    }

    private function buscaResultados($parametros) {
        $this->cards = Tarifa::where([
            ["origen_id",$parametros["origen"]],
            ["destino_id",$parametros["destino"]]
        ])->with(["origen","destino","unidad"])->get(); 
    }

    public function obtienePax(string $pax1, string $pax2, int $numPerson): string {
        $splitPax = explode('-',$pax1);
        if($this->siEsEntrePax($splitPax[0], $splitPax[1], $numPerson)) {
            return $pax1;
        }
        // TODO se toma en cuenta que la info de pax siempre tiene que ir en la db
        return $pax2;
    }

    public function obtienePrecio(string $pax1, string $pax2, int $numPerson, string $precio1, string $precio2): string {
        $splitPax = explode('-',$pax1);
        if($this->siEsEntrePax($splitPax[0], $splitPax[1], $numPerson)) {
            return $precio1;
        }
        // TODO se toma en cuenta que la info de pax siempre tiene que ir en la db
        return $precio2;
    }

    public function reservar($tarifa_id, $personas, $idaVuelta, $tipoServicios, $fechaLlegada,$fechaSalida) {
        return redirect()->route("publico.reservar.traslados",[
            'id'=>$tarifa_id, 
            'personas'=> $personas,
            'idaVuelta' => $idaVuelta,
            'tipoServicio' => $tipoServicios,
            'fechaLlegada' =>$fechaLlegada,
            'fechaSalida'=> $fechaSalida
        ]);
    }

    private function siEsEntrePax(int $num1, int $num2, $num3): bool {
        return $num3>=$num1 && $num3<=$num2;
    }
}
