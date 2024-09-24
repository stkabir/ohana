<?php

namespace App\Livewire\Dashboard;

use App\Models\Servicio as ServicioModel;
use App\Livewire\Forms\ServicioForm;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Component;
use Auth;

class Servicio extends Component {
    use WithPagination;

    public ServicioForm $form;

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
        $data = ServicioModel::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $columns = [
            [
                'name' => 'nombre',
                'label' => 'Nombre',
            ],
            [
                'name' => 'tipo',
                'label' => 'Tipo de servicio',
            ],
        ];
        return view('livewire.dashboard.servicios.index', [
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
        $this->form->setServicio($id);
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