<?php

namespace App\Livewire\Dashboard;

use App\Models\Reserva as ReservaModel;
use App\Livewire\Forms\ReservaForm;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Component;
use Auth;

class Reserva extends Component {
    use WithPagination;

    public ReservaForm $form;

    protected $paginationTheme = 'bootstrap';

    #[Url(history:true)]
    public $search = '';

    #[Url(history:true)]
    public $type = '';

    #[Url(history:true)]
    public $sortBy = 'id';

    #[Url(history:true)]
    public $sortDir = 'DESC';

    #[Url()]
    public $perPage = 10;

    public $updateMode = false;

    public function render() {
        $data = ReservaModel::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $columns = [
            [
                'name' => 'folio',
                'label' => 'Folio',
            ],
            [
                'name' => 'total',
                'label' => 'Total',
            ],
            [
                'name' => 'clientes.nombre',
                'label' => 'Cliente',
            ],
            [
                'name' => 'numero_personas',
                'label' => 'Personas',
            ],
            [
                'name' => 'reservaciones_personas.nombre',
                'label' => 'Pasajeros',
            ],
            [
                'name' => 'reservaciones_detalles_traslados.lugar_inicio_id',
                'label' => 'Origen',
            ],
            [
                'name' => 'reservaciones_detalles_traslados.lugar_fin_id',
                'label' => 'Destino',
            ],
            [
                'name' => 'reservaciones_detalles_traslados.fecha',
                'label' => 'Fecha',
            ],
            [
                'name' => 'reservaciones_detalles_traslados.aerolinea',
                'label' => 'Aerolinea',
            ],
            [
                'name' => 'reservaciones_detalles_traslados.numero_vuelo',
                'label' => 'Vuelo',
            ],
        ];
        return view('livewire.dashboard.reservas.index', [
            'data' => $data,
            'columns' => $columns,
        ]);
    }

    public function store() {
        $this->form->store();
        $this->updateMode = false;
    }

    public function edit($id) {
        $this->updateMode = true;
        $this->form->setReserva($id);
    }

    public function setSortBy($sortByField) {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function cancel() {
        $this->updateMode = false;
        $this->form->reset();
    }
}