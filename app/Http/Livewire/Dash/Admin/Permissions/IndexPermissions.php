<?php

namespace App\Http\Livewire\Dash\Admin\Permissions;

use Livewire\Component;

class IndexPermissions extends Component
{
    public function render()
    {
        return view('dash.admin.permissions.index-permissions')
            ->layout('layouts.dash');
    }
}
