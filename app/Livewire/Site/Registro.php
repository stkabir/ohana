<?php

namespace App\Livewire\Site;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use Hash;

class Registro extends Component {
    #[Validate('required|min:4')]
    public $nombre = '';

    #[Validate('required|email')]
    public $correo = '';

    #[Validate('required|min:6|confirmed')]
    public $password = '';

    public $password_confirmation = '';

    public function render() {
        return view('livewire.site.registro');
    }

    public function guardar() {
        $this->validate();

        $password = Hash::make($this->password);

        User::create([
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'password' => $password,
        ]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->reset();
    }
}