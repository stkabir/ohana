<?php

namespace App\Livewire\Forms\Publico;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ReservarTrasporteForm extends Form
{
    #[Validate ('required|max:30')]
    public string $nombre = '';

    #[Validate ('required|max:30')]
    public string $apellido = '';

    #[Validate ('required|max:10')]
    public string $telefono = '';

    #[Validate ('required|max:100')]
    public string $email = '';

    #[Validate ('max:200')]
    public string $comentario = '';

    #[Validate ('required|min:1')]
    public int $numeroPersonas = 1;

    #[Validate ('required')]
    public int $tipoServicio = 1;

    #[Validate ('required')]
    public int $idaVuelta = 0;

    public string $fechaLlegada = '';

    public string $aerolinea1 = '';

    public string $numeroVuelo1 = '';

    public $fechaSalida = '';

    public string $aerolinea2 = '';

    public string $numeroVuelo2 ='';

    public string $hora1 = '';

    public string $hora2 = '';

    #[Validate('required')]
    public array $personas = [];


    /**
     * Summary of store
     * @return void
     */
    public function store() 
    {
        $messages = [
            'aerolinea1' => 'El nombre de la aerolinea de llegada es obligatorio.',
            'numeroVuelo1' => 'El número de vuelo de llegada es obligatorio.',
            'aerolinea2' => 'El nombre de la aerolinea de salida es obligatorio.',
            'numeroVuelo2' => 'El número de vuelo de salida es obligatorio.',
            'hora1' => 'La hora de salida del hotel es obligatorio.',
            'hora2' => 'La hora de regreso al hotel es obligatorio.'
        ];
        $attibutes = [ 
            'email' => 'correo electrónico',
            'telefono' => 'teléfono',
        ];
        $validacionLlegada = [
            Rule::requiredIf($this->validacionLlegada())
        ];
        $validacionSalida = [
            Rule::requiredIf($this->validacionSalida())
        ];

        $rules = array_merge(
            $this->getRules(),
            [
                'fechaLlegada' => $validacionLlegada,
                'aerolinea1' => $validacionLlegada,
                'numeroVuelo1' => $validacionLlegada,
                'fechaSalida' => $validacionSalida,
                'aerolinea2' => $validacionSalida,
                'numeroVuelo2' => $validacionSalida,
                'hora1' => [ Rule::requiredIf($this->tipoServicio == '3')],
                'hora2' => [ Rule::requiredIf($this->tipoServicio == '3' && $this->idaVuelta == '1')]
            ],
            $this->pasajerosError($this->numeroPersonas)
        );
        $this->validate(rules: $rules, attributes: $attibutes, messages: $messages);

    }

    public function validacionLlegada(): bool {
        if ($this->tipoServicio=='1') {
            return true;
        }
        return false;
    }

    public function validacionSalida(): bool {
        if ($this->idaVuelta=='1' || ($this->tipoServicio == '2' && $this->idaVuelta == '0')) {
            return true;
        }
        return false;
    }

    private function pasajerosError($num): array {
        $r = [];
        for($i=0;$i<$num;$i++) {
            $r['personas.'.$i] = 'required';
        }
        return $r;
    }
}
