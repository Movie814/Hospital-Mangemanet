<?php

namespace App\Http\Controllers;

use App\Models\adminServiceModel;
use Illuminate\Http\Request;

class adminServiceController extends Controller
{





    public function adminServiceCreate(){
        return view('AdminServiceCreate');
    }






    public function storeAdminServiceCreate(Request $request){
        $serviceData= new adminServiceModel;
        $serviceData->subtitle=$request->subtitle;
        $serviceData->title=$request->title;
        $serviceData->discrip=$request->discrip;
        if($request->hasfile('img')){
            $img_file=$request->file('img');
            $ext=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $img_file->move('uploads/imgs',$img_name);
            $serviceData->img='uploads/imgs/'.$img_name;

        }
        $serviceData->save();
        return redirect()->back();
        }








        public function  showAdminServiceList(){
            $showserviceList=adminServiceModel::all();
            return view('AdminServiceList')->with(compact('showserviceList'));
        }







        public function editAdminServiceList($id=null){
            $editeServiceId=adminServiceModel::find($id);
            return view('UpdateAdminServiceList')->with(compact('editeServiceId'));
        }








        public function  updateAdminServiceListStore(Request $request ,$id){
            $updateserviceData=adminServiceModel::find($id);
            $updateserviceData->subtitle=$request->subtitle;
        $updateserviceData->title=$request->title;
        $updateserviceData->discrip=$request->discrip;
        if($request->hasfile('img')){
            $img_file=$request->file('img');
            $ext=$img_file->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $img_file->move('uploads/imgs',$img_name);
            $updateserviceData->img='uploads/imgs/'.$img_name;

        }
        $updateserviceData->save();
        return redirect()->route('storeAdminServiceCreate');
        }









        public function deleteAdminServiceList($id){
            $deleteServiceId=adminServiceModel::find($id);
            $deleteServiceId->delete();
            return redirect()->back();

        }
}
