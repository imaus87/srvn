<?php

namespace App\Http\Livewire\Dash\Admin\Permissions;

use Livewire\Component;

class ShowPermissions extends Component
{
    public function render()
    {
        return view('dash.admin.permissions.show-permissions')
            ->layout('layouts.dash');
    }
}
