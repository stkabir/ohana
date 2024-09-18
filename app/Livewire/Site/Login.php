<?php

namespace App\Livewire\Site;

use Livewire\Component;
use Auth;

class Login extends Component {
    public $correo, $password;

    public function render() {
        return view('livewire.site.login');
    }

    public function login() {
        $validatedDate = $this->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['correo' => $this->correo, 'password' => $this->password, 'activo' => 1])) {
            request()->session()->regenerate();

            return redirect()->route('dashboard.home');
            // session()->flash('message', "You are Login successful.");
        }
        else {
            session()->flash('error', 'correo o contraseña incorrectos');
        }
    }
}