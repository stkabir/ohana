<?php

namespace App\Livewire\Publico;

use Livewire\Component;

class Buscador extends Component
{
    public $mostrarFechaRegreso = false;

    public function render()
    {
        return view('livewire.publico.buscador');
    }

    public function seleccionaTipoTour($soloIda) {
        if ($soloIda) {
            $this->mostrarFechaRegreso = true;
        } else {
            $this->mostrarFechaRegreso = false;
        }
    }
}
