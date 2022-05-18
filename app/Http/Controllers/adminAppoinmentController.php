<?php

namespace App\Http\Controllers;

use App\Models\appointmentControllerModel;
use Illuminate\Http\Request;

class adminAppoinmentController extends Controller
{
    public function showAppoinmentData(){
        $showAppoinmentDataList=appointmentControllerModel::all();
        return view('AdminAppoinmentPage')->with(compact('showAppoinmentDataList'));
    }
    public function cancelAppoinment($id){
        $cancelAppoinmentData=appointmentControllerModel::find($id);
        $cancelAppoinmentData->delete();
       return redirect()->back();


    }
}
