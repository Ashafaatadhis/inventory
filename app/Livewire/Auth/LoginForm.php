<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{

    #[Validate("required|email")]
    public $email = "";

    #[Validate("required|min:6")]
    public $password = "";

    public bool $remember = false;

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate(); // keamanan session
            return redirect()->intended('/dashboard'); // atau route lainnya
        }

        $this->addError('email', 'Email atau password salah.');
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
