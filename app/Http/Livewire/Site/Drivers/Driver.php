<?php

namespace App\Http\Livewire\Site\Drivers;

use App\Models\User;
use Livewire\Component;

class Driver extends Component
{
    public $driver;

    public function mount(User $driver): void
    {
        $this->driver = $driver;
    }

    public function render()
    {
        return view('site.drivers.driver');
    }
}
