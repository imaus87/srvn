<?php

namespace App\Http\Livewire\Dash\Admin\Roles;

use Livewire\Component;

class IndexRoles extends Component
{
    public function render()
    {
        return view('dash.admin.roles.index-roles')
            ->layout('layouts.dash');
    }
}
