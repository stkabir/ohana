<?php

namespace App\Livewire\Publico\Componentes;

use App\Livewire\Publico\Componentes\FormControlHijo;
use App\Models\Lugar;

class SelectAeropuerto extends FormControlHijo
{
    public function render()
    {
        $lugares = Lugar::whereHas("zona", function($query) {
            $query->where('aeropuerto', '=' , true);
        })->get();
        return view('livewire.publico.componentes.select-aeropuerto', ['lugares'=> $lugares]);
    }

    public function updated() {
        $this->emiteValor();
    }
}
