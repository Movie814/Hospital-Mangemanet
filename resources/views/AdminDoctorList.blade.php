@extends('layouts.adminLayout')
@section('admincontent')

<div class="container table-responsive py-5"> 
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>BIO</th>
          <th>Image</th>
        
         
          
        </tr>
      </thead>
      <tbody>
          @foreach ($adminDoctorShowData as $item)
              
        
        <tr>
          <th>{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->bio}}</td>
          <td>{{$item->img}}</td>
       
          <td>
               <p><a href="{{url('/admin/doctor/list'.$item->id)}}" class=" btn btn-danger d-grid ">cancel</a></p>
        </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
    </div>
    
@endsection