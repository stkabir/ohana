<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Reserva;
use Livewire\Form;

class ReservaForm extends Form {

    #[Validate]
    public $nombre = '';

    public $zona_id = 0;

    public function rules()  {
        return [
            'nombre' => [
                'required',
                'max:50',
                Rule::unique('zonas', 'nombre')->ignore($this->zona_id),
            ],
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
        Reserva::updateOrCreate(['id' => $this->zona_id], [
            'nombre' => $this->nombre,
        ]);
        $this->reset();
    }

    public function setReserva($id) {
        $zona = Reserva::find($id);
        $this->nombre = $zona->nombre;
        $this->zona_id = $id;
    }
}