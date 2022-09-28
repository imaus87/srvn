<?php

namespace App\Http\Livewire\Dash\Team;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dash.team.dashboard')
            ->layout('layouts.dash');
    }
}
