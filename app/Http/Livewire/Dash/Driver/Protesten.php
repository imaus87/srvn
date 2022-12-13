<?php

namespace App\Http\Livewire\Dash\Driver;

use Livewire\Component;

class Protesten extends Component
{
    public function render()
    {
        return view('dash.driver.protesten')
            ->layout('layouts.dash');
    }
}
