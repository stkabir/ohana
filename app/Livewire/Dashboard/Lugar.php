<?php

namespace App\Livewire\Dashboard;

use App\Models\Lugar as LugarModel;
use App\Livewire\Forms\LugarForm;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Zona;
use Auth;

class Lugar extends Component {
    use WithPagination;

    public LugarForm $form;

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
        $data = LugarModel::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        $zonas = Zona::all();
        $columns = [
            [
                'name' => 'nombre',
                'label' => 'Nombre',
            ],
            [
                'name' => 'zona_id',
                'label' => 'Zona',
            ],
        ];
        return view('livewire.dashboard.lugares.index', [
            'data' => $data,
            'zonas' => $zonas,
            'columns' => $columns,
        ]);
    }

    public function store() {
        $this->form->store();
        $this->updateMode = false;
    }

    public function edit($id) {
        $this->updateMode = true;
        $this->form->setLugar($id);
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