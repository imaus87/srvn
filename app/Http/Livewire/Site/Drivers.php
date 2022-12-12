<?php

namespace App\Http\Livewire\Site;

use App\Models\User;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class Drivers extends Component
{
    use WithPagination;

    public Collection $driversCollection;
    public string $search = '';

    protected $queryString = ['search' => ['except' => '']];

    public function mount(): void
    {
        $this->driversCollection = $this->getDrivers();
    }

    public function getDrivers(): Collection
    {
        if (empty($this->search)) {
            $drivers = User::orderBy('start_nr')->limit(30)->get();

            return $drivers;
        }

        $drivers = User::where('full_name', 'like', '%' . $this->search . '%')
            ->get();

        return $drivers;
    }

    public function updatedSearch(): void
    {
        $this->driversCollection = $this->getDrivers();
        $this->resetPage();
    }

    public function render(): View
    {
        return view('site.drivers', [
            'drivers' => $this->driversCollection->all()
        ]);
    }
}
