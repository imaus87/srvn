<?php

namespace App\Http\Livewire\Dash\Admin\Users;

use Livewire\Component;

class EditUsers extends Component
{
    public function render()
    {
        return view('dash.admin.users.edit-users')
            ->layout('layouts.dash');
    }
}
