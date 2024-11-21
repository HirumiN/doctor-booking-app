<?php

namespace App\Livewire;

use Livewire\Component;

class Specialities extends Component
{
    public function render()
    {
        return view('livewire.specialities', [
            'specialities' => \App\Models\Specialities::all()
        ]);
    }
}
