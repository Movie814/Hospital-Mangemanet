@extends('layouts.adminLayout')
@section('admincontent')

<div class="container table-responsive py-5"> 
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Date</th>
          <th>Issu</th>
          <th>Doctor</th>
          <th>Message</th>
          <th>Check</th>
         
          
        </tr>
      </thead>
      <tbody>
          @foreach ($showAppoinmentDataList as $item)
              
        
        <tr>
          <th>{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->date}}</td>
          <td>{{$item->category}}</td>
          <td>{{$item->drname}}</td>
          <td>{{$item->msg}}</td>
          <td>
               <p><a href="{{url('/admin/appoinment/cancel/'.$item->id)}}" class=" btn btn-danger d-grid ">cancel</a></p>
        </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
    </div>
        
@endsection