<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }

    public function view(){
        return view("admin.doctor-listing");
    }

    public function createDoctor(){
        return view("admin.create-doctor");
    }

    public function viewSPecialities(){
        return view("admin.specialities");
    }
    public function createSpecialities(){
        return view("admin.create-speciality");
    }
}
