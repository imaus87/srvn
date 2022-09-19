<?php

namespace App\Http\Livewire\Dash;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function render()
    {
        return view('dash.dashboard')
            ->layout('layouts.dash');
    }
}
