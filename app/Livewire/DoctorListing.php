<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListing extends Component
{
    public $doctors = '';
    public function mount(){
        $this->doctors = Doctor::with('speciality', 'user')->get();
        // dd($this->doctors);
    }
    public function render()
    {


        return view('livewire.doctor-listing', [
            'doctors' => Doctor::all(),
        ]);
    }
}
