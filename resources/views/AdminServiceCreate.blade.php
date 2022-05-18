@extends('layouts.adminLayout')
@section('admincontent')



        <div class="row container">
            <form action=" {{route('storeAdminServiceCreate')}} " enctype="multipart/form-data" method="POST">
              @csrf
            <div class="form-group col-md-3 mt-5 ">
                <div >
                    <label for="#"><h5><b>Select Iamge</b></h5></label>
                    <input type="file" name="img" class=" btn btn-success">
                </div>
              <div >
                  <label for="#"><h5><b>Sub-tiltle</b></h5></label>
                  <input type="text" name="subtitle" class=" form-control">
              </div>
              <div  class="mt-3">
                  <label for="#"><h5><b>Title</b></h5></label>
                  <input type="text" name="title" class=" form-control">
              </div>
              <div  class="mt-3">
                  <label for="#"><h5><b>Discription</b></h5></label>
                  <textarea class="form-control"  name="discrip" rows="4"></textarea>
              </div>
      
            </div>
            <input type="submit" value="Send" class="btn btn-success mt-3 ">
          </form>
      
      
        </div>
 
@endsection 