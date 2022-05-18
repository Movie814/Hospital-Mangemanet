<?php

namespace App\Http\Controllers;

use App\Models\collectedMediaModel;
use Illuminate\Http\Request;

class adminCollectedMediacontroller extends Controller
{
    public function showCollectedMediaPage(){
        $showCollectedMedia=collectedMediaModel::all();
        return view('AdminCollectedMedia')->with(compact('showCollectedMedia'));
    }


    public function  addCollectedMedia(Request $request){
        $collectedMediaData=new collectedMediaModel;
        $collectedMediaData->title=$request->title;
        $collectedMediaData->link=$request->link;
        if($request->hasfile('img')){
            $img_file=$request->file('img');
            $ext=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $img_file->move('media/imgs',$img_name);
            $collectedMediaData->img='media/imgs/'.$img_name;
        }
        $collectedMediaData->save();
        return redirect()->back();
    }
    public function deleteCollectedMedia($id){
        $deleteCollectData=collectedMediaModel::find($id);
        $deleteCollectData->delete();
       return redirect()->route('showCollectedMediaPage');

    }
}
