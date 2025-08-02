<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterForm extends Component
{

    #[Validate("required|string|min:3|max:255")]
    public $username = "";

    #[Validate("required|email|unique:users,email")]
    public $email = "";

    #[Validate("required|min:6|same:password_confirmation")]
    public $password = "";

    #[Validate("required")]
    public $password_confirmation = "";

    public function register()
    {
        $this->validate();

        $user = User::create([
            "name" => $this->username,
            "email" => $this->email,
            "password" => Hash::make($this->password)
        ]);


        Auth::login($user);
        return redirect()->route("dashboard");
    }

    public function render()
    {

        return view('livewire.auth.register-form');
    }
}
