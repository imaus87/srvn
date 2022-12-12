<?php

namespace App\Http\Livewire\Dash\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Illuminate\Support\Collection;

class IndexUsers extends Component
{
    use WithPagination;

    public Collection $users;
    public string $search = '';
    public int $loadAmount = 10;
    public int $loadIncrement = 10;
    public int $totalRecords;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function mount(): void
    {
        $this->getUsers();
    }

    public function getUsers(): void
    {
        if (empty($this->search)) {
            $users = User::with(['roles'])
            ->get();
        }

        if (strpos($this->search, '@')) {
            $users = User::where('email', 'like', '%' . $this->search . '%')
                ->with(['roles'])
                ->get();
        }

        $users = User::where('full_name', 'like', '%' . $this->search . '%')
            ->with(['roles'])
            ->get();

        $this->totalRecords = $users->count();
        $this->users = $users->take($this->loadAmount);
    }

    public function setAmount(int $amount): void
    {
        $this->loadAmount = $amount;
        $this->loadIncrement = $amount;
        $this->getUsers();
    }

    public function updatedSearch(): void
    {
        $this->getUsers();
    }

    public function loadMore(): void
    {
        $this->loadAmount += $this->loadIncrement;
        $this->getUsers();
    }

    public function render(): View
    {
        return view('dash.admin.users.index-users')
            ->layout('layouts.dash');
    }
}
