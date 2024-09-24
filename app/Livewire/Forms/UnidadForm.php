<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Unidad;
use Livewire\Form;

class UnidadForm extends Form {

    #[Validate]
    public $nombre = '';

    #[Validate]
    public $capacidad = '';

    #[Validate]
    public $tipo = '';

    // #[Validate]
    // public $imagen = '';

    public $unidad_id = 0;

    public function rules()  {
        return [
            'nombre' => [
                'required',
                'max:50',
                // Rule::unique('unidades', 'nombre')->ignore($this->unidad_id),
            ],
            'capacidad' => 'required|numeric',
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
        Unidad::updateOrCreate(['id' => $this->unidad_id], [
            'nombre' => $this->nombre,
            'capacidad' => $this->capacidad,
            'tipo' => $this->tipo,
        ]);
        $this->reset();
    }

    public function setUnidad($id) {
        $unidad = Unidad::find($id);
        $this->nombre = $unidad->nombre;
        $this->capacidad = $unidad->capacidad;
        $this->tipo = $unidad->tipo;
        $this->unidad_id = $id;
    }
}