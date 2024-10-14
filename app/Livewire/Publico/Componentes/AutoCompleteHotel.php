<?php

namespace App\Livewire\Publico\Componentes;

use Livewire\Component;
use App\Models\Lugar;

class AutoCompleteHotel extends Component
{
    public string $value;

    public string $idValue;

    public string $tipo; // origen || destino

    public $lugares = [];
    
    public bool $mostrarLugares = false;

    public function render()
    {
        $this->lugares = Lugar::all();
        return view('livewire.publico.componentes.auto-complete-hotel');
    }
    public function blurControl() 
    {
        if(count($this->lugares)>0) {
            $this->mostrarLugares = true;
        } else {
            $this->mostrarLugares = false;
        }
    }

    public function buscarLugares()
    {
        if($this->value != '') {
            $this->lugares = Lugar::where('nombre','like', '%'.$this->value.'%')->get();
        } else {
            $this->lugares = [];
        }
        $this->blurControl();
    }

    public function seleccionar(string $id, string $nombre) 
    {
        $this->value=$nombre;
        $this->idValue=$id;
        $this->mostrarLugares = false;
    }
}
