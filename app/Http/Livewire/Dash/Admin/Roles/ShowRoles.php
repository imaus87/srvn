<?php

namespace App\Http\Livewire\Dash\Admin\Roles;

use Livewire\Component;

class ShowRoles extends Component
{
    public function render()
    {
        return view('dash.admin.roles.show-roles')
            ->layout('layouts.dash');
    }
}
