<?php

namespace App\Livewire\Forms\Publico\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TrasporteForm extends Form
{
    #[Validate('required|numeric|min:1', null,null, message:"Seleccione una opción valida")]
    public int $tipoServicios = 1;

    #[Validate('required|numeric|min:1')]
    public string $origen = "";

    #[Validate('required|numeric|min:1')]
    public string $destino = "";

    #[Validate('required')]
    public string $fechaIda = "";

    #[Validate('required')]
    public string $fechaVuelta = "";

    #[Validate('required|numeric|min:1')]
    public string $adultos = "0";

    #[Validate('required|numeric|min:1')]
    public string $ninos = "0";

    public function store() 
    {
        $this->validate();
 
    }

    public function limpiaValidacion() 
    {
        $this->resetValidation();
    }
    
}
