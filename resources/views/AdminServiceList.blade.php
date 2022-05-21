@extends('layouts.adminLayout')
@section('admincontent')
<div class="container container-fluid">
 
    <h1 class="mt-4">SERVICE LIST</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active"> SERVICE</li>
    </ol>
    <div class="row">
      <div class="col-11">
        <table class="table table-bordered  border-dark">
          <thead>
            <tr>
              <th >ID</th>
              <th >Title</th>
              <th >Sub Title</th>
              <th >Discrption</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($showserviceList as $data)
  
            <tr >
              <th >{{$data->id}}</th>
              <td>{{$data->title}}</td>
              <td>{{$data->subtitle}}</td>
              <td>{{$data->discrip}}</td>
              <td >
                <p> <a href="{{url('/admin/service/edit/'.$data->id)}}"  class=" btn btn-success d-grid ">Update</a></p>
                <p><a href="{{url('/admin/service/delete/'.$data->id)}}" class=" btn btn-danger d-grid ">Delete</a></p>
                
              </td>
            </tr>
  
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
{{-- 
      <script src="https://kit.fontawesome.com/ae6e4b2cc8.js" crossorigin="anonymous"></script> --}}
</div>

@endsection