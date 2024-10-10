<?php

namespace App\Livewire\Publico;

use App\Livewire\Forms\Publico\Forms\TrasporteForm;
use Livewire\Component;
use Livewire\Attributes\On; 

class Buscador extends Component
{
    public TrasporteForm $form;

    public bool $idaVuelta = true;

    #[On('actualizaValor')]
    public function actualizaValor(string $campo, string $valor)
    {
        $this->form->{$campo} = $valor;
    }

    public function render()
    {
        return view('livewire.publico.buscador');
    }

    public function updated() {
        $this->form->origen = "";
        $this->form->destino = "";
        $this->form->limpiaValidacion();
    }

    public function buscarTrasporte()
    {
        $this->form->store(); 
    }
}
