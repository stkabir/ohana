<?php

namespace App\Livewire\Publico\Componentes;

use App\Livewire\Publico\Componentes\FormControlHijo;
use App\Models\Zona;

class SelectAeropuerto extends FormControlHijo
{
    public function render()
    {
        $zonas = Zona::where("nombre", "like", "%APTO%")->get();
        return view('livewire.publico.componentes.select-aeropuerto', ["zonas" => $zonas]);
    }

    public function updated() {
        $this->emiteValor();
    }
}
