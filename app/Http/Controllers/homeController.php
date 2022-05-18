<?php

namespace App\Http\Controllers;
use App\Models\adminServiceModel;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homePage(){
        $serviceDataShow=adminServiceModel::all();
        return view('Home')->with(compact('serviceDataShow'));
    }
}
