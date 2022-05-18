@extends('layouts.masterLayout')
@section('content')
    <!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Our-Doctors</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{route('homePage')}}">home &nbsp;/</a>
                </li>
                <li>Our-Doctors</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--team section-->
<section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Our Expert
        <span>Doctors</span>
      </h3>
      <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
        <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
    </div>
    <div class="row justify-content-center">
      @foreach ($ourdoctorData as $item)
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="{{asset($item->img)}}" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>{{$item->name}}</h4>
            <p>{{$item->bio}}</p>
            <a href="{{route('appointmentspage')}}" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
      @endforeach


    </div>
    <br> <br>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        
        {{ $ourdoctorData->links() }}
        
        
      </ul>
    </nav>
    
    
  </div>
</section>
<!--End team section-->


@endsection