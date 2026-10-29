<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credenciais = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credenciais)) {
            session()->regenerate();

            return redirect()->route('produto.index');
        }

        session()->flash(
            'error',
            'E-mail ou senha inválidos.'
        );
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
