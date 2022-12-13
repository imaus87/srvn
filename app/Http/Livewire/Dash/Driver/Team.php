<?php

namespace App\Http\Livewire\Dash\Driver;

use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        return view('dash.driver.team')
            ->layout('layouts.dash');
    }
}
