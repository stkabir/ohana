<?php

namespace App\Livewire\Publico\Componentes;

use App\Livewire\Publico\Componentes\FormControlHijo;
use App\Models\Lugar;

class AutoCompleteHotel extends FormControlHijo
{
    public $value;

    public $lugares = [];

    public $inputModificado = false;
    
    public bool $mostrarLugares = false;

    public function render()
    {
        if(!empty($this->valueGet) && $this->valueGet !== 0 && !$this->inputModificado ){
            $lugarSeleccionado = Lugar::find($this->valueGet);
            $this->seleccionar($lugarSeleccionado->id, $lugarSeleccionado->nombre);
        }
        return view('livewire.publico.componentes.auto-complete-hotel');
    }
    public function blurControl() 
    {
        $this->inputModificado = true;
        if(count($this->lugares)>0) {
            $this->mostrarLugares = true;
        } else {
            $this->mostrarLugares = false;
        }
    }

    public function buscarLugares()
    {
        if(!empty($this->value)) {
            $this->lugares = Lugar::where('nombre','like', '%'.$this->value.'%')
            ->whereHas("zona", function($query) {
                $query->where('aeropuerto',false);
            })
            ->get();
        } else {
            $this->lugares = Lugar::whereHas("zona", function($query) {
                $query->where('aeropuerto', '=' ,false);
            })
            ->get();
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
