<?php

namespace App\Http\Livewire\Dash\Admin\Roles;

use Livewire\Component;

class EditRoles extends Component
{
    public function render()
    {
        return view('dash.admin.roles.edit-roles')
            ->layout('layouts.dash');
    }
}
