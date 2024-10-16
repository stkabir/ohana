<?php

namespace App\Livewire\Publico;

use App\Livewire\Forms\Publico\Forms\TrasporteForm;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Attributes\On; 

class Buscador extends Component
{
    public TrasporteForm $form;

    public int $origenGet = 0;

    public int $destinoGet = 0;

    #[On('actualizaValor')]
    public function actualizaValor(string $campo, string $valor)
    {
        $this->form->{$campo} = $valor;
    }

    public function render(Request $request)
    {
        $this->recibeParametrosGet($request->all());
        return view('livewire.publico.buscador');
    }

    public function buscarTrasporte()
    {
        $this->form->store(); 
        return redirect()->route("publico.buscar.traslados",$this->form->toArray());
    }

    private function recibeParametrosGet($data): void {
        foreach($data as $k => $v) {
            if(isset($v)) {
                if(isset($this->form->{$k})){
                    $this->form->{$k} = $v;
                }
                switch($k) {
                    case 'origen':
                        $this->origenGet= $v;
                        break;
                    case 'destino':
                        $this->destinoGet= $v;
                        break;
                    default:
                        break;
                }
            }
        }
    }
}
