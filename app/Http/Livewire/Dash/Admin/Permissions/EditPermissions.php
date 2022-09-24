<?php

namespace App\Http\Livewire\Dash\Admin\Permissions;

use Livewire\Component;

class EditPermissions extends Component
{
    public function render()
    {
        return view('dash.admin.permissions.edit-permissions')
            ->layout('layouts.dash');
    }
}
