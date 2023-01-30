<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Home extends Component
{
    public $showNewOrderNotification = false;

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo:user,TestEvent' => 'notifyNewOrder'];

    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
    }

    public function render()
    {
        return view('site.home');
    }
}
