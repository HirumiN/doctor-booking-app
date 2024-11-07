<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class SpecialityForm extends Component
{
    public $name ="";

    public function submit(){
        $this->validate([
            'name' => 'required',
        ]);

        $submit = new Specialities();
        $submit->name = $this->name;
        $submit->save();

        session()->flash('message','Data has been saved successfully!');
        return $this->redirect(route('admin-specialities'), navigate: true);
    }
    public function render()
    {
        return view('livewire.speciality-form');
    }
}
