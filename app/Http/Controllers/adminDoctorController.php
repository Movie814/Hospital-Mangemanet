<?php

namespace App\Http\Controllers;

use App\Models\doctorController;
use Illuminate\Http\Request;

class adminDoctorController extends Controller
{
    public function adminDoctor(){
        return view('AdminDoctorPage');
    } 
public function  adminDoctorShow(){
    $adminDoctorShowData=doctorController::all();
    return view('AdminDoctorList')->with(compact('adminDoctorShowData'));
}

    public function adminDoctorStore(Request $request){
        $adminDoctorData= new doctorController;
        $adminDoctorData->name=$request->name;
        $adminDoctorData->bio=$request->bio;
        if($request->hasfile('img')){
            $img_file=$request->file('img');
            $ext=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $img_file->move('doctor/imgs',$img_name);
            $adminDoctorData->img='doctor/imgs/'.$img_name;
            

        }
        $adminDoctorData->save();
        return redirect()->back();
    }
}
