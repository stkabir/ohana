<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
// use Illuminate\Validation\Rule;
use App\Models\Lugar;
use Livewire\Form;

class LugarForm extends Form {

    #[Validate]
    public $nombre = '';

    #[Validate]
    public $zona_id = '';

    public $lugar_id = 0;

    public function rules()  {
        return [
            'nombre' => 'required|min:3',
            'zona_id' => 'required',
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
        Lugar::updateOrCreate(['id' => $this->lugar_id], [
            'nombre' => $this->nombre,
            'zona_id' => $this->zona_id,
        ]);
        $this->reset();
    }

    public function setLugar($id) {
        $lugar = Lugar::find($id);
        $this->nombre = $lugar->nombre;
        $this->zona_id = $lugar->zona_id;
        $this->lugar_id = $lugar->id;
    }
}