<?php

namespace App\Http\Livewire\Dash\Crew;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dash.crew.dashboard')
            ->layout('layouts.dash');
    }
}
