<?php

namespace App\Http\Livewire\Dash\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dash.admin.dashboard')
            ->layout('layouts.dash');
    }
}
