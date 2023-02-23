<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function dashboard(){
        return view('medicool.backend.doctor.pages.dashboard');
    }
}
