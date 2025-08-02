<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LogoutButton extends Component
{


    public function logout()
    {
        Log::info('User berhasil logout');

        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('auth.login');
    }

    public function render()
    {
        return view('livewire.auth.logout-button');
    }
}
