<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Standings extends Component
{
    public array $fprostandings = [];

    public function mount(): void
    {
        $this->fprostandings = [
           ['position' => 1, 'name' => 'Denny Mateman', 'team' => 'Scuderia Leone', 'points' => 1174],
           ['position' => 2, 'name' => 'Bas van Grunsven', 'team' => 'Limbourgini VMS Motorsport', 'points' => 1159],
           ['position' => 3, 'name' => 'Dylan Klaver', 'team' => 'Scuderia Bollesnegro', 'points' => 1146],
           ['position' => 4, 'name' => 'Hans van Putten', 'team' => 'VMS-SunEdits Racing', 'points' => 1094],
           ['position' => 5, 'name' => 'Stefan van der Horn', 'team' => 'Fast Forward Racing Team', 'points' => 1080],
           ['position' => 6, 'name' => 'Gert Dekker', 'team' => 'Gear Racing', 'points' => 1033],
           ['position' => 7, 'name' => 'Maurice Willems', 'team' => 'Anillusion Racing', 'points' => 1030],
           ['position' => 8, 'name' => 'Milan Kort', 'team' => 'VMS-SunEdits Racing', 'points' => 1028],
           ['position' => 9, 'name' => 'Twan Capellen', 'team' => 'Racing Team South-East', 'points' => 1002],
           ['position' => 10, 'name' => 'Marcel van der Heiden', 'team' => 'ConRep Racing', 'points' => 998],
           ['position' => 11, 'name' => 'Ron Jansen', 'team' => '', 'points' => 960],
           ['position' => 12, 'name' => 'Wouter Bosschieter', 'team' => 'Orange Boost Racing', 'points' => 884],
           ['position' => 13, 'name' => 'Gert Hagedoorn', 'team' => 'Scuderia Leone', 'points' => 881],
           ['position' => 14, 'name' => 'Mika de Bruijn', 'team' => 'Limbourgini VMS Motorsport', 'points' => 818],
           ['position' => 15, 'name' => 'Wilbert Velthove', 'team' => 'GNCR Motorsports', 'points' => 810],
           ['position' => 16, 'name' => 'Lovel van Oerle', 'team' => 'Anillusion Racing', 'points' => 786],
           ['position' => 17, 'name' => 'Rogier de Klein', 'team' => 'Scuderia Bollesnegro', 'points' => 768],
           ['position' => 18, 'name' => 'Ron Schmitz', 'team' => 'Limbourgini VMS Motorsport', 'points' => 766],
           ['position' => 19, 'name' => 'Frank Hamming', 'team' => 'VMS-SunEdits Racing', 'points' => 718],
           ['position' => 20, 'name' => 'Bart Bosschieter', 'team' => 'Orange Boost Racing', 'points' => 609],
        ];
    }

    public function render()
    {
        return view('site.standings');
    }
}
