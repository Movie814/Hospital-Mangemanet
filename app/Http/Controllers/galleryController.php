<?php

namespace App\Http\Controllers;

use App\Models\collectedMediaModel;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function galleryPage(){
        $showacollectedmedia=collectedMediaModel::all();
        return view('Gallery')->with(compact('showacollectedmedia'));
    }
}
