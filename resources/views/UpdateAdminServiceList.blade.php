@extends('layouts.adminLayout')

@section('admincontent')
    

<div class="row container">
    <h1 class="mt-4">SERVICE LIST</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active"> SERVICE</li>
    </ol>
    <div class="row container">
      <form action="{{url('/admin/service/edit/'.$editeServiceId->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        {{method_field('PUT')}}
      <div class="form-group col-md-3 mt-5 ">
          <div >
              <label for="#"><h5><b>Select Iamge</b></h5></label>
              <input type="file" name="img" value="{{$editeServiceId->img}}" class=" btn btn-success" required>
          </div>
        <div >
            <label for="#"><h5><b>Sub-tiltle</b></h5></label>
            <input type="text" name="subtitle" value="{{$editeServiceId->subtitle}}" class=" form-control" required>
        </div>
        <div  class="mt-3">
            <label for="#"><h5><b>Title</b></h5></label>
            <input type="text" name="title" value="{{$editeServiceId->title}}" class=" form-control" required>
        </div>
        <div  class="mt-3">
            <label for="#"><h5><b>Discription</b></h5></label>
            <textarea class="form-control"  name="discrip" value="{{$editeServiceId->discrip}}" rows="4"></textarea>
            <input type="text" name="" value="{{$editeServiceId->discrip}}" id=""  class=" form-control" required>
        </div>

      </div>
      <input type="submit" value="Send" class="btn btn-success mt-3 ">
    </form>


  </div>

  </div>



@endsection