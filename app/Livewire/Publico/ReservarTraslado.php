<?php

namespace App\Livewire\Publico;

use Livewire\Component;
use App\Livewire\Forms\Publico\ReservarTrasporteForm;
use Illuminate\Http\Request;

class ReservarTraslado extends Component
{
    public ReservarTrasporteForm $form;

    public function render(Request $request)
    {
        return view('livewire.publico.reservar-traslado');
    }

    public function mount(Request $request) {
        $this->form->tipoServicio = $request->get("tipoServicio");
        $this->form->numeroPersonas = $request->get("personas");
        $this->form->idaVuelta = $request->get("idaVuelta");
        $this->form->fechaLlegada = $request->get("fechaLlegada");
        $this->form->fechaSalida = $request->get("fechaSalida");
    }

    public function procederPago() {
        $this->form->store();
        dd($this->form);
        return '';
    }
}
