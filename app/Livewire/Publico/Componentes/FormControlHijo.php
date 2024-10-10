<?php

namespace App\Livewire\Publico\Componentes;

use Livewire\Component;

class FormControlHijo extends Component
{
    public $form;

    public function mount($form)
    {
        $this->form = $form;
    }

    public function updatedForm()
    {
        $this->emitUp('updateFormFromChild', (array)$this->form);
    }

    public string $nombre;
}
