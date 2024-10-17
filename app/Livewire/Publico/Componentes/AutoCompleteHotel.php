<?php

namespace App\Livewire\Publico\Componentes;

use App\Livewire\Publico\Componentes\FormControlHijo;
use App\Models\Lugar;

class AutoCompleteHotel extends FormControlHijo
{
    public $value;

    public $lugares = [];
    
    public bool $mostrarLugares = false;

    public function render()
    {
        $this->lugares = Lugar::all();
        if(!empty($this->valueGet) && $this->valueGet !== 0){
            $lugarSeleccionado = Lugar::find($this->valueGet);
            $this->seleccionar($lugarSeleccionado->id, $lugarSeleccionado->nombre);
        }
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
        $modelName = strtolower($this->nombre);
        $this->form->{$modelName}=$id;
        $this->mostrarLugares = false;
        $this->emiteValor();
    }
}
