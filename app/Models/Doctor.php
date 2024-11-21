<?php

namespace App\Models;

use App\Models\User;
use App\Models\Specialities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [

        'bio' ,
        'hospital' ,
        'user_id' ,
        'speciality_id' ,
        'twitter' ,
        'instagram' ,
        'experience' ,
    ];

    public function speciality(){
        return $this->belongsTo(Specialities::class, 'speciality_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
