<?php

namespace App\Livewire\Publico\Componentes;

use Livewire\Component;
use App\Models\Zona;

class SelectAeropuerto extends Component
{
    public int $value;

    public string $tipo; // origen || destino

    public function render()
    {
        $zonas = Zona::where("nombre", "like", "%APTO%")->get();
        return view('livewire.publico.componentes.select-aeropuerto', ["zonas" => $zonas]);
    }
}
