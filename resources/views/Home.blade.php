@extends('layouts.masterLayout')
@section('content')



<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(images/slider/slider-bg-1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start -->
            <div class="content style text-center">
              <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Our Best Surgeons</h2>
              <p class="tag-text mb-4" data-animation-in="slideInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br> Quis quos officiis numquam!</p>
              <a href="{{route('servicePage')}}" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">explore</a>
            </div>
            <!-- Slide Content End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start-->
            <div class="content style text-center">
              <h2 class="text-white" data-animation-in="slideInRight">We Care About Your Health</h2>
              <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <a href="{{route('servicePage')}}" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">about us</a>
            </div>
            <!-- Slide Content End-->
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start -->
            <div class="content text-center style">
              <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Best Medical Services</h2>
              <p class="tag-text mb-4" data-animation-in="slideInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.</p>
              <a href="{{route('servicePage')}}" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">shop now</a>
            </div>
            <!-- Slide Content End -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--====  End of Page Slider  ====-->
  
  <section class="cta">
    <div class="container">
      <div class="cta-block row no-gutters">
        <div class="col-lg-4 col-md-6 emmergency item">
          <i class="fa fa-phone"></i>
          <h2>Emegency Cases</h2>
          <a href="tel:1-800-700-6200">1-800-700-6200</a>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-lg-4 col-md-6 top-doctor item">
          <i class="fa fa-stethoscope"></i>
          <h2>24 Hour Service</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit
            vel eum</p>
          <a href="{{route('servicePage')}}" class="btn btn-main">Read more</a>
        </div>
        <div class="col-lg-4 col-md-12 working-time item">
          <i class="fa fa-hourglass-o"></i>
          <h2>Working Hours</h2>
          <ul class="w-hours">
            <li>Mon - Fri - <span>8:00 - 17:00</span></li>
            <li>Mon - Fri - <span>8:00 - 17:00</span></li>
            <li>Mon - Fri - <span>8:00 - 17:00</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <!--about section-->
  <section class="feature-section section bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="image-content">
                      <div class="section-title text-center">
                          <h3>Best Features <span>of Our Hospital</span></h3>
                          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br> nam error officia vero tempora alias? Sunt?</p>
                      </div>
  
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="item">
                                  <div class="icon-box">
                                      <figure>
                                          <a href="{{route('servicePage')}}"><img loading="lazy" src="images/resource/1.png" alt="features image"></a>
                                      </figure>
                                  </div>
                                  <h3 class="mb-2">Orthopedics</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
                                      ex sunt, est aspernatur
                                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="item">
                                  <div class="icon-box">
                                      <figure>
                                          <a href="{{route('servicePage')}}">
                                              <img loading="lazy" src="images/resource/2.png" alt="features image">
                                          </a>
                                      </figure>
                                  </div>
                                  <h3 class="mb-2">Diaginostic</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
                                      ex sunt, est aspernatur
                                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="item">
                                  <div class="icon-box">
                                      <figure>
                                          <a href="{{route('servicePage')}}">
                                              <img loading="lazy" src="images/resource/3.png" alt="features image">
                                          </a>
                                      </figure>
                                  </div>
                                  <h3 class="mb-2">Psycology</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
                                      ex sunt, est aspernatur
                                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="item">
                                  <div class="icon-box">
                                      <figure>
                                          <a href="{{route('servicePage')}}">
                                              <img loading="lazy" src="images/resource/4.png" alt="features image">
                                          </a>
                                      </figure>
                                  </div>
                                  <h3 class="mb-2">General Treatment</h3>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
                                      ex sunt, est aspernatur
                                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--End about section-->
  
  <!--Start about us area-->
  <section class="service-tab-section section">
    <div class="outer-box clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="tabs mb-5">
              <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="dormitory-tab" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory" aria-selected="true">dormitory</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="orthopedic-tab" data-toggle="tab" href="#orthopedic" role="tab" aria-controls="orthopedic" aria-selected="false">orthopedic</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="sonogram-tab" data-toggle="tab" href="#sonogram" role="tab" aria-controls="sonogram" aria-selected="false">sonogram</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="x-ray-tab" data-toggle="tab" href="#x-ray" role="tab" aria-controls="x-ray" aria-selected="false">x-ray</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="diagnostic-tab" data-toggle="tab" href="#diagnostic" role="tab" aria-controls="diagnostic" aria-selected="false">diagnostic</a>
                </li>
              </ul>
            </div>
            <!--Start single tab content-->
            <div class="tab-content" id="aboutTab">
              <div class="service-box tab-pane fade show active" id="dormitory">
                <div class="row">
                  <div class="col-lg-6">
                    <img loading="lazy" class="img-fluid" src="images/services/service-one.jpg" alt="service-image">
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>dormitory</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added. then a
                          dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added. then a dental
                          prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                      </ul>
                      <a href="{{route('servicePage')}}" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade" id="orthopedic">
                <div class="row">
                  <div class="col-lg-6">
                    <img loading="lazy" class="img-fluid" src="images/services/service-two.jpg" alt="service-image">
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>orthopedic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                      </ul>
                      <a href="{{route('servicePage')}}" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade" id="sonogram">
                <div class="row">
                  <div class="col-lg-6">
                    <img loading="lazy" class="img-fluid" src="images/services/service-three.jpg" alt="service-image">
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>sonogram</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                      </ul>
                      <a href="{{route('servicePage')}}" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade" id="x-ray">
                <div class="row">
                  <div class="col-lg-6">
                    <img loading="lazy" class="img-fluid" src="images/services/service-four.jpg" alt="service-image">
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>x-ray</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                      </ul>
                      <a href="{{route('servicePage')}}" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade" id="diagnostic">
                <div class="row">
                  <div class="col-lg-6">
                    <img loading="lazy" class="img-fluid" src="images/services/service-five.jpg" alt="service-image">
                  </div>
                  <div class="col-lg-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>diagnostic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                          then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                        <li>
                          <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                          involves</li>
                      </ul>
                      <a href="{{route('servicePage')}}" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End about us area-->
  
  <!--Service Section-->
  <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Provided
          <span>Services</span>
        </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
          fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="items-container">
            
            @foreach ($serviceDataShow as $item)
           
      
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="{{route('servicePage')}}">
                    <img loading="lazy" src="{{asset($item->img)}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <span>{{$item->subtitle}}</span>
                  <a href="{{route('servicePage')}}">
                    <h6>{{$item->title}}</h6>
                  </a>
                  <p>{{$item->discrip}}</p>
                </div>
              </div>
            </div>
  
            @endforeach
  

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Service Section-->
  
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
        <div class="col-lg-4 col-md-6">
          <div class="team-member">
            <img loading="lazy" src="images/team/doctor-2.jpg" alt="doctor" class="img-fluid">
            <div class="contents text-center">
              <h4>Dr. Robert Barrethion</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
              <a href="{{route('appointmentspage')}}" class="btn btn-main">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-member">
            <img loading="lazy" src="images/team/doctor-lab-3.jpg" alt="doctor" class="img-fluid">
            <div class="contents text-center">
              <h4>Dr. Marry Lou</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
              <a href="{{route('appointmentspage')}}" class="btn btn-main">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-member">
            <img loading="lazy" src="images/team/event-2.jpg" alt="doctor" class="img-fluid">
            <div class="contents text-center">
              <h4>Dr. Sansa Stark</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
              <a href="{{route('appointmentspage')}}" class="btn btn-main">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End team section-->
  
  <!--testimonial-section-->
  <section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h3>What Our
              <span>Patients Says</span>
            </h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/1.png" alt="">
                  </figure>
                </div>
                <h6>Adam Rose</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/2.png" alt="">
                  </figure>
                </div>
                <h6>David Warner</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/3.png" alt="">
                  </figure>
                </div>
                <h6>Amy Adams</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/1.png" alt="">
                  </figure>
                </div>
                <h6>Adam Rose</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/2.png" alt="">
                  </figure>
                </div>
                <h6>David Warner</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/3.png" alt="">
                  </figure>
                </div>
                <h6>Amy Adams</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/1.png" alt="">
                  </figure>
                </div>
                <h6>Adam Rose</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/2.png" alt="">
                  </figure>
                </div>
                <h6>David Warner</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img loading="lazy" src="images/testimonials/3.png" alt="">
                  </figure>
                </div>
                <h6>Amy Adams</h6>
                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End testimonial-section-->
  
  <!-- Contact Section -->
  <section class="appoinment-section section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="accordion-section">
    <div class="section-title">
      <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
      <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h4 class="card-title">
              <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Why Should I choose Medical Health
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
              officia aute,
              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
              tempor,
              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
              haven't
              heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h4 class="card-title">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                What are the Centre’s visiting hours?
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
              officia aute,
              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
              tempor,
              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
              haven't
              heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h4 class="card-title">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                How many visitors are allowed?
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
              officia aute,
              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
              tempor,
              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
              haven't
              heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-area pl-0 pl-lg-5">
    <div class="section-title">
      <h3>Request
        <span>Appointment</span>
      </h3>
    </div>
    <form action="{{url('/appointment')}}" class="default-form contact-form"  method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <select class="form-control" name="category">
              <option>Departments</option>
              <option>Diagnostic</option>
              <option>Psychological</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="number" name="phone" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="date" placeholder="Date" required id="datepicker" autocomplete="off">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </div>
          <div class="form-group">
            <select class="form-control" name="drname">
              <option>Doctor</option>
              <option>Diagnostic</option>
              <option>Psychological</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <textarea class="form-control" name="msg" placeholder="Your Message" required></textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn-style-one">submit now</button>
          </div>
        </div>
      </div>
    </form>
  </div>
        </div>
      </div>                    
    </div>
  </section>
  <!-- End Contact Section -->
  
  
    
@endsection