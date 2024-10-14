<?php

namespace App\Livewire\Publico;

use Livewire\Component;

class Buscador extends Component
{
    public bool $idaVuelta = true;
    public int $tipoServicios = 1;

    public function render()
    {
        return view('livewire.publico.buscador');
    }
}
