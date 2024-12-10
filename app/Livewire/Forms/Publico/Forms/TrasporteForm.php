<?php

namespace App\Livewire\Forms\Publico\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TrasporteForm extends Form
{
    
    #[Validate('required|numeric')]
    public int $idaVuelta = 1;

    #[Validate('required|numeric|min:1')]
    public int $tipoServicios = 1;

    #[Validate('required|numeric|min:1')]
    public string $origen = "";

    #[Validate('required|numeric|min:1')]
    public string $destino = "";

    #[Validate('required|date|after_or_equal:today')]
    public string $fechaIda = "";

    #[Validate('required_if:idaVuelta,1|date|after_or_equal:fechaIda')]
    public string $fechaVuelta = "";

    #[Validate('required|numeric|min:1')]
    public string $adultos = "0";

    #[Validate('required|numeric|min:0')]
    public string $ninos = "0";

    public function store() 
    {
        $this->validate(messages:[
            "tipoServicios" => "Seleccione una opción valida",
            "origen"=>"Seleccione un origen",
            "destino"=>"Seleccione un destino",
            "fechaIda"=>"Seleccione una fecha de ida valida",
            "fechaVuelta"=>"Seleccione una fecha de vuelta valida",
            "adultos"=>"La cantidad no puede ser menor a 1",
            "ninos"=>"La cantidad no puede ser menor a 0"
        ]);
 
    }    
}
