<?php

namespace App\Http\Livewire\Dash\Admin\Permissions;

use Livewire\Component;

class CreatePermissions extends Component
{
    public function render()
    {
        return view('dash.admin.permissions.create-permissions')
            ->layout('layouts.dash');
    }
}
