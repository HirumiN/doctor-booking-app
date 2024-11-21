<?php

namespace App\Livewire;

use Livewire\Component;

class Specialities extends Component
{
    public function delete($id){
        $speciality = \App\Models\Specialities::find($id);
        $speciality->delete();
        session()->flash("message","Speciality deleted Successfully");
        return redirect()->route("admin-specialities");
    }
    public function render()
    {
        return view('livewire.specialities', [
            'specialities' => \App\Models\Specialities::all()
        ]);
    }
}
