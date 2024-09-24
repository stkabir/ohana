<?php

namespace App\Livewire\Dashboard;

use App\Models\Tarifa as TarifaModel;
use App\Livewire\Forms\TarifaForm;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Servicio;
use Livewire\Component;
use App\Models\Unidad;
use App\Models\Lugar;
use Auth;

class Tarifa extends Component {
    use WithPagination;

    public TarifaForm $form;

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
        $data = TarifaModel::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $columns = [
            [
                'name' => 'servicio_id',
                'label' => 'Servicio',
            ],
            [
                'name' => 'origen_id',
                'label' => 'Origen',
            ],
            [
                'name' => 'destino_id',
                'label' => 'Destino',
            ],
            [
                'name' => 'unidad_id',
                'label' => 'Unidad',
            ],
            [
                'name' => 'pax1',
                'label' => '1-8 PAX',
            ],
            [
                'name' => 'pax2',
                'label' => '9-12 PAX',
            ],
        ];
        $servicios = Servicio::all();
        $lugares = Lugar::all();
        $unidades = Unidad::all();
        return view('livewire.dashboard.tarifas.index', [
            'data' => $data,
            'columns' => $columns,
            'servicios' => $servicios,
            'lugares' => $lugares,
            'unidades' => $unidades,
        ]);
    }

    public function store() {
        $this->form->store();
        $this->updateMode = false;
    }

    public function edit($id) {
        $this->updateMode = true;
        $this->form->setTarifa($id);
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