<?php

namespace App\Http\Livewire\Dash\Team;

use Livewire\Component;

class Information extends Component
{
    public bool $editmode = false;
    public string $name;
    public string $location;
    public string $owner;
    public int $since;
    public string $description;

    public function mount(): void
    {
        $this->name = 'Anillusion Racing';
        $this->location = 'Veldhoven';
        $this->owner = 'Maurice Willems';
        $this->since = 2014;
        $this->description = 'Annilusion Racing is voortgekomen uit F1Cast Racing.
                              Plezier in het racen staat bij ons centraal.';
    }

    public function editOn(): void
    {
        $this->editmode = true;
    }

    public function editOff(): void
    {
        $this->editmode = false;
    }

    public function save()
    {
        $this->editmode = false;
    }

    public function render()
    {
        return view('dash.team.information')
            ->layout('layouts.dash');
    }
}
