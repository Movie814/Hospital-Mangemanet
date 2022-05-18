<?php

namespace App\Http\Controllers;

use App\Models\appointmentControllerModel;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function appointmentspage(){
        return view('Appointment');
    }



    public function sendAppoinmentData(Request $request){
        $appoinmentData= new appointmentControllerModel;
        $appoinmentData->name=$request->name;
        $appoinmentData->phone=$request->phone;
        $appoinmentData->email=$request->email;
        $appoinmentData->date=$request->date;
        $appoinmentData->category=$request->category;
        $appoinmentData->drname=$request->drname;
        $appoinmentData->msg=$request->msg;
        $appoinmentData->save();
    return redirect()->route('homePage');
    }
}
