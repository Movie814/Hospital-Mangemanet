@extends('layouts.adminLayout')
@section('admincontent')
<div class="card mb-4">
<div class=" card-body">




        <div class="row container">
            <form action="{{url('/admin/gallery/media')}} " enctype="multipart/form-data" method="POST">
              @csrf
            <div class="form-group col-md-3 mt-5 ">
                <div >
                    <label for="#"><h5><b>Cover Iamge</b></h5></label>
                    <input type="file" name="img" class=" btn btn-success">
                </div>
            
              <div  class="mt-3">
                  <label for="#"><h5><b>Title</b></h5></label>
                  <input type="text" name="title" class=" form-control" required>
              </div>
              <div >
                <label for="#"><h5><b>Video Link</b></h5></label>
                <input type="text" name="link" class=" form-control" required>
            </div>
      
            </div>
            <input type="submit" value="Send" class="btn btn-success mt-3 ">
          </form>
      

      
        </div>


        <div class="container-fuluid table-responsive py-5"> 
          <table class="table table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th >ID</th>
                <th >Title</th>
                <th >Link</th>
                
              </tr>
            </thead>
            <tbody>
             @foreach ($showCollectedMedia as $item)
                 
            
              <tr>
                <th >{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td> {{$item->link}}</td>
                <td>
                  <p><a href="{{url('/admin/gallery/media/'.$item->id)}}" class=" btn btn-danger d-grid ">cancel</a></p>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          


</div>
</div>

 
@endsection 