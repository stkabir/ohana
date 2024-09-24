<?php

namespace App\Livewire\Dashboard;

use App\Models\Zona as ZonaModel;
use App\Livewire\Forms\ZonaForm;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Component;
use Auth;

class Zona extends Component {
    use WithPagination;

    public ZonaForm $form;

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
        $data = ZonaModel::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $columns = [
            [
                'name' => 'nombre',
                'label' => 'Nombre',
            ],
            // [
            //     'name' => 'zona_id',
            //     'label' => 'Zona',
            // ],
        ];
        return view('livewire.dashboard.zonas.index', [
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
        $this->form->setZona($id);
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