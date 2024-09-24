<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Servicio;
use Livewire\Form;

class ServicioForm extends Form {

    #[Validate]
    public $nombre = '';

    #[Validate]
    public $tipo = '';

    public $servicio_id = 0;

    public function rules()  {
        return [
            'nombre' => [
                'required',
                // 'max:50',
                // Rule::unique('servicios', 'nombre')->ignore($this->servicio_id),
            ],
            'tipo' => 'required',
        ];
    }

    // public function messages()  {
    //     return [
    //         'content.required' => 'The :attribute are missing.',
    //     ];
    // }

    // public function validationAttributes() {
    //     return [
    //         'content' => 'description',
    //     ];
    // }

    public function store() {
        $this->validate();
        Servicio::updateOrCreate(['id' => $this->servicio_id], [
            'nombre' => $this->nombre,
            'tipo' => $this->tipo,
        ]);
        $this->reset();
    }

    public function setServicio($id) {
        $servicio = Servicio::find($id);
        $this->nombre = $servicio->nombre;
        $this->tipo = $servicio->tipo;
        $this->servicio_id = $id;
    }
}