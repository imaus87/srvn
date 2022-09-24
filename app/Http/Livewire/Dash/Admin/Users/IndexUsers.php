<?php

namespace App\Http\Livewire\Dash\Admin\Users;

use Livewire\Component;

class IndexUsers extends Component
{
    public function render()
    {
        return view('dash.admin.users.index-users')
            ->layout('layouts.dash');
    }
}
