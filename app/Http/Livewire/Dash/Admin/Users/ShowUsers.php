<?php

namespace App\Http\Livewire\Dash\Admin\Users;

use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        return view('dash.admin.users.show-users')
            ->layout('layouts.dash');
    }
}
