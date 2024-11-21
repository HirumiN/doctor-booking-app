<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class EditSpecialityForm extends Component
{
    public $speciality;

    public $name;

    public function mount($id)
    {
        $this->speciality = Specialities::find($id);

        $this->name = $this->speciality->name;
    }

    public function update()
    {
        // Validasi input
        $this->validate([
            'name' => 'required'
        ]);

        // Mengupdate data speciality
        $update = Specialities::find($this->speciality->id);
        $update->update([
            'name' => $this->name
        ]);

        // Opsional: Menambahkan feedback atau mengarahkan setelah update
        session()->flash('message', 'Specialty updated successfully!');
        return redirect()->route('admin-specialities');
    }
    public function render()
    {
        return view('livewire.edit-speciality-form');
    }
}
