<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Tarifa;
use Livewire\Form;

class TarifaForm extends Form {

    #[Validate]
    public $servicio_id = '';

    #[Validate]
    public $origen_id = '';

    #[Validate]
    public $destino_id = '';

    #[Validate]
    public $unidad_id = '';

    #[Validate]
    public $pax1 = '';

    #[Validate]
    public $pax2 = '';

    // #[Validate]
    // public $imagen = '';

    public $tarifa_id = 0;

    public function rules()  {
        return [
            'servicio_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
            'unidad_id' => 'required',
            'pax1' => 'required|numeric',
            'pax2' => 'required|numeric',
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
        Tarifa::updateOrCreate(['id' => $this->tarifa_id], [
            'servicio_id' => $this->servicio_id,
            'origen_id' => $this->origen_id,
            'destino_id' => $this->destino_id,
            'unidad_id' => $this->unidad_id,
            'pax1' => $this->pax1,
            'pax2' => $this->pax2,
        ]);
        $this->reset();
    }

    public function setTarifa($id) {
        $unidad = Tarifa::find($id);
        $this->servicio_id = $unidad->servicio_id;
        $this->origen_id = $unidad->origen_id;
        $this->destino_id = $unidad->destino_id;
        $this->unidad_id = $unidad->unidad_id;
        $this->pax1 = $unidad->pax1;
        $this->pax2 = $unidad->pax2;
        $this->tarifa_id = $id;
    }
}