@extends('layouts.adminLayout')
@section('admincontent')
<h1 class="mt-4">DASH BOARD</h1>
<ul class="breadcrumb mb-4  bg-gray ">
    <li class="breadcrumb-item  text-center"><a href="{{route('adminPage')}}">Dashboard</a></li>
    <li class="breadcrumb-item active text-center">Static Navigation</li>
</ul>
<div class="card mb-4">
    <div class="card-body">


        <div class="row container">
            <form action="{{url('/admin/doctor/add')}} " enctype="multipart/form-data" method="POST">
              @csrf

            <div class="form-group col-md-3 mt-5 ">
                <div >
                    <label for="#"><h5><b>Select Iamge</b></h5></label>
                    <input type="file" name="img" class=" btn btn-success" required>
                </div>
            
              <div  class="mt-3">
                  <label for="#"><h5><b>Name</b></h5></label>
                  <input type="text" name="name" class=" form-control" required>
              </div>
              <div  class="mt-3">
                  <label for="#"><h5><b>Discription</b></h5></label>
                  <textarea class="form-control"  name="bio" rows="4" required></textarea>
              </div>
      
            </div>
            <input type="submit" value="Send" class="btn btn-success mt-3 ">
          </form>
      
      
        </div>

    </div>
</div>
@endsection