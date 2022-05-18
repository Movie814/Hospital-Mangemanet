<?php

namespace App\Http\Controllers;

use App\Models\doctorController;
use Illuminate\Http\Request;

class ourDoctorsController extends Controller
{
    public function ourDoctorsPage(){
        $ourdoctorData=doctorController::paginate(6);
        return view('Ourdoctor')->with(compact('ourdoctorData'));
        
    }
}

