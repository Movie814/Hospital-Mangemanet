<?php

namespace App\Http\Controllers;

use App\Models\adminServiceModel;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function servicePage(){
        $serviceDataShow=adminServiceModel::all();
        return view('Service')->with(compact('serviceDataShow'));
    }
}
