<?php

namespace App\Http\Livewire\Dash\Driver;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dash.driver.dashboard')
            ->layout('layouts.dash');
    }
}
