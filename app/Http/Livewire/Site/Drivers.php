<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Drivers extends Component
{
    public Collection $drivers;

    public function mount(): void
    {
        $this->drivers = User::all();
    }

    public function render(): View
    {
        return view('site.drivers');
    }
}
