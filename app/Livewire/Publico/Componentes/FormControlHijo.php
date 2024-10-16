<?php

namespace App\Livewire\Publico\Componentes;

use Livewire\Component;
use App\Livewire\Forms\Publico\Forms\TrasporteForm;

class FormControlHijo extends Component
{
    public string $nombre;
    public TrasporteForm $form;

    public function mount(TrasporteForm $form)
    {
        $this->form = $form;
    }

    public function emiteValor()
    {
        $this->dispatch('actualizaValor', campo: $this->nombre, valor: $this->form->{$this->nombre});
    }

}
