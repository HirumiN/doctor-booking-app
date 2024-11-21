<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialities;
use Illuminate\Support\Facades\Hash;

class DoctorForm extends Component
{
    public $specialities;
    public $name = '';
    public $email = '';
    public $bio ='';
    public $hospital='';
    public $speciality_id='';
    public $password='';
    public $twitter='';
    public $instagram='';

    public $experience='';


    public function mount(){
        $this->specialities = Specialities::all();
    }

    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'hospital' => 'required',
            'speciality_id' => 'required',
            'password'=> 'required|min:4',
            'twitter' => 'string',
            'instagram' => 'string',
            'experience' => 'required',
        ]);

        // user table
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = 1;
        $user->password = Hash::make($this->password);
        $user->save();


        // doctor table
        $doctor = new Doctor;
        $doctor->user_id = $user->id;
        $doctor->bio = $this->bio;
        $doctor->hospital = $this->hospital;
        $doctor->speciality_id = $this->speciality_id;
        $doctor->twitter = $this->twitter;
        $doctor->instagram = $this->instagram;
        $doctor->experience = $this->experience;
        $doctor->save();
        session()->flash('message', 'Doctor Created Successfully');
        return redirect(route('admin-doctors'));
    }

    public function render()
    {
        return view('livewire.doctor-form');
    }
}
