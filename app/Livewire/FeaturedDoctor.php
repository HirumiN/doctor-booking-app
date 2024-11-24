<?php

namespace App\Livewire;

use Livewire\Component;

class FeaturedDoctor extends Component
{
    public $featuredDoctors;

    public function mount($specialty_id = 0)
    {
        // Ambil data dokter berdasarkan spesialisasi
        if ($specialty_id != 0) {
            $this->featuredDoctors = \App\Models\Doctor::with(['speciality', 'user'])
                ->whereHas('speciality', function ($query) use ($specialty_id) {
                    $query->where('id', $specialty_id); // Mengacu langsung ke kolom id di tabel specialities
                })->get();
        } else {
            $this->featuredDoctors = \App\Models\Doctor::with(['speciality', 'user'])->get();
        }
    }

    public function render()
    {
        return view('livewire.featured-doctor');
    }
}
