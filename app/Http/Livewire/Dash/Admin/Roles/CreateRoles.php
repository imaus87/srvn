<?php

namespace App\Http\Livewire\Dash\Admin\Roles;

use Livewire\Component;

class CreateRoles extends Component
{
    public function render()
    {
        return view('dash.admin.roles.create-roles')
            ->layout('layouts.dash');
    }
}
