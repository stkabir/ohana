<?php

namespace App\Livewire\Publico;

use Livewire\Component;
use Livewire\Attributes\Validate; 

class Buscador extends Component
{
    public $form;
    public bool $idaVuelta = true;
    public int $tipoServicios = 1;

    public function mount()
    {
        $this->form = (object)[
            'idaVuelta' => '',
            'tipoServicio' => '',
            'origen' => '',
            'destino' => '',
            'fechaIda' => '',
            'fechaVuelta' => '',
            'adultos' => '',
            'ninos' => '',
        ];
    }

    protected $listeners = ['updateFormFromChild'];

    public function updateFormFromChild($data)
    {
        foreach ($data as $key => $value) {
            $this->form->$key = $value;
        }
    }

    public function render()
    {
        return view('livewire.publico.buscador');
    }

    public function buscarTrasporte()
    {
        $this->validate();
    }
}
