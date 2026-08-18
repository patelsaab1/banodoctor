@extends('layouts.base')
@section('body')



  <!-- start hero section -->
  <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 ">
                    <h1>Your True <br>Medical Career Planner</h1>
                    
                    <h2>Become Our Channel Partner</h2>
                    <a href="https://us05web.zoom.us/j/4128230451?pwd=MXhnck1tV1NueHVoQk9hMXhOdkdCQT09" class="btn-get-started"> <i class="fa-solid fa-video fa-fade"></i> Live Counselling</a>
                    <a href="https://www.banodoctor.com/contact-us" class="btn-get-started1"> <i class="fa-solid fa-bell fa-shake"></i> Talk With Expert</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset('assets/images/aaaaaa.png')}}" alt="Bano Doctor" class="pngpic">
                </div>
            </div>
           
        </div>
    </section>


    <!-- start card  -->
    <section id="over-card" class="over-card">
        <div class="container">
            <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="{{ asset('assets/images/costumer_satisfaction.png')}}" alt=" Client Satisfaction">
                            <h3>90%</h3>
                            <p class="text-center">Client Satisfaction</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="{{ asset('assets/images/mortarboard.png')}}" alt="Successfull Admission">
                            <h3>85%</h3>
                            <p class="text-center">Successfull Admission</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="{{ asset('assets/images/graduated.png')}}" alt="Student Placed">
                            <h3>1500+</h3>
                            <p class="text-center">Student Placed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    <!-- heading start -->
  <!-- <section class="section mt-7 our-services ">

 
      <div class="container">
          
                <h3>Our Services</h3>
                
                <div class="tagline-style"></div>
               
                <p class="section-description">We provide services globally to take admission for UG,PG &amp; PG Diploma Medical Courses</p>
                
                </div>
           
            
            
 </section>     -->
    <!-- heading end -->
    <!-- Services Section - Home Page -->
    <section id="services" class="services serve mt-4 mb-5 ">
        <div class="container">
        
          
          <h3>Our Services</h3>
          
          <div class="tagline-style"></div>
         
          <p class="section-description">We provide services globally to take admission for UG,PG &amp; PG Diploma Medical Courses</p>
          
        
            <div class="row">
                 @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="card">
                    <div class="backg">
                              
                              
                    <img src="{{ asset('submenu-icon/'.$service->icon_image) }}"  alt="Provide Services for {{ $service->title }}" class="card-img-top " ></div>
                        <div class="main-div">
                          
                            
                               <a href="{{ url('/'.$service->slug)}}" class="servanchor" area-label="{{ $service->title }}"> <h3>{{ $service->title }}</h3></a>
                        
                        </div>
                    </div>
                </div>
                
                @endforeach
                
                
            </div>
            
           
        </div>


    </section><!-- End Services Section -->
 
 
  <!-- about-us start -->
    <section class="section about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12" id="hide-section">
                    <img src="https://www.banodoctor.com/public/assets/background/about-us-background.webp"
                        class="cls-for-img" alt="Bano Doctor Your true medical career planner">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="d-flex">
                        <div class="tagline-style about-us"></div>
                        <h3 class="section-heading">Who We are ?</h3>
                    </div>
                    <div class="mt-2"><span class="section-text-box p-1 ">Bano Doctor Education Consultancy</span></div>

                    <h3 class="section-text">No. 1 Consultancy &amp; <br>New Brand of old trust</h3>
                    <p class="text-white page-paragraph">In your service since more than 13 years.</p>
                    <p class="text-white page-paragraph">We are pioneer Counsultancy for medical admission since 13
                        Years ago. Course we deals in MD/MS Admission/ mbbs,bvsc Admission/BAMS Admission/BHMS
                        Admission/BND Admission/CPS/FCPS Admission/MRCP/MRCS &amp; many more medical courses.
                    </p>

                    <a href="https://www.banodoctor.com/about-us" class="know-more-button p-2"
                        alt="Know more about bano doctor">Know More</a>

                    <p class="page-paragraph">
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- about-us end -->
  
    

   <!-- How It Work start -->
    <section class="section mt-5 our-services ">

        <div class="how mt-5">
            <div class="howone pb-5">
                <div class="container">

                    <div class="head">
                        <h3 class="">How It Work?</h3>
                        <div class="tagline-style "></div>
                    </div>
                    <div id="minimal-statistics">
                        <div class="row">
                            <div class="col-12 mb-5 mt-5">


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated "
                                data-wow-delay="1s" data-wow-duration="1.3s" data-wow-repeat="2">

                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">1</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex justify-content-spacebetween ">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Call</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Inbound</p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Outbound</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/call.png')}}" alt="Bano Doctor Services with Inbound and Outbond Calls">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">2</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Explain</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Service</p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Intrest</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/explain.png')}}" alt="Bano Doctor Counsellor Experts Explain every steps for admission">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">3</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Meet</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Online</p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Offline</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/meet.png')}}" alt="Bano Doctor Counsellor available offline and online ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light">4</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Discuss</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Marks</p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Budget</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/discuss.png')}}" alt="Bano Doctor is Helpful under your marks and Budget provide admission">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 ">
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light">5</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body ">
                                                    <h3 class="primary">Suggestion</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> A/C to
                                                        Budget
                                                    </p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> A/C to Marks
                                                    </p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/suggestion.png')}}" alt="Bano Doctor Sugguestions ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">6</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Deal</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Documents
                                                    </p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Formalities
                                                    </p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/deal.png')}}" alt="Bano Doctor Deal us All required documents and formalities">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">7</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Expection</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Addmission
                                                    </p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Post
                                                        Assistance
                                                    </p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/expection.png')}}" alt="Bano Doctor fulfill Your Expectations ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mb-5 animate_fadeInUp wow animate_animated"
                                data-wow-delay="1s" data-wow-duration="1.3s">
                                <div class="card">
                                    <h3> <span class="badge text-bg-primary text-light ">8</span></h3>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                    <h3 class="primary">Client</h3>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Happy</p>
                                                    <p><i class="fa-solid fa-reply fa-rotate-180 icon"></i> Loyal</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <img src="{{ asset('assets/images/client.png')}}" alt=" Bano Doctor Delivering services results Happy & Loyal Customers ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--  how it work end -->

<!-- Experties Section -->


@include("layouts.domestic-states")


 
  
<section class="section mb-7 heart"> 
    
       <div class="container" >
          
                <h3>We Are Expert In</h3>
                
                <div class="tagline-style"></div>
               
              
           
            
            
 </div>   
 
    <div class="container">
       
        <div class="row owl-carousel owl-theme">
            @foreach($admissions as $admission)
          
                <div class="course-box text-center m-3">
                    <div class="img-box">
                    <img src="{{ asset('submenu-icon/'.$admission->icon_image) }}" class="img-fluid" alt="Admissions in Course {{ $admission->title}}">
                  </div>
                  <div class="course-content-box mt-2 p-1">
                    <h3 class="title">{{ $admission->title}}</h3>
                  </div>
                  
                

                </div>

          @endforeach


           
          

          

        </div>

    </div>
</section>

<!-- End Experties Section -->


<!-- Course Section -->


@include("layouts.courses-we-provide")
<!-- End Experties Section -->

<!-- Course Widget -->

@include("layouts.md-ms-course")
<!-- End of states -->



<!-- Start  of states section -->

<div class="section mt-7 mb-7">
    
    <div class="container">
        
          <h3>Internationally we serve in</h3>
            <div class="tagline-style"></div>
          
        
        <div class="row">
            
            <div class="col-md-12" id="hide-section">
        
       
         
         
        <img src="{{ asset('assets/background/world-study-background.webp')}}"  class="cls-for-img" alt="Bano Doctor Internationally Serve"> </div> </div>
           
             <!-- <div class="col-md-6"><img src="{{ asset('assets/background/world-trip.png')}}"></div>-->
    </div>
     


    <div class="container">

       

       <div class="row">


@foreach($widgetcountry as $widget)

          <div class="col-md-3 country-box">
             <div class="country-image-box "><img src="{{ asset('widget/'.$widget->image)}}" alt=" Bano Doctor Internationally Serve in state {{$widget->title}}" class="country-bx-imag">
             
             
             
            </div>
            
             <div class="logo-box swing"> 
            <div class="web-logo"> 
             <img src="https://banodoctor.com/public/Bano-Doctor-Logo.png" alt="Bano Doctor services are available in state {{ $widget->title }}" >
            </div>
             
             <!--<div class="country-logo">
             
             <img src="https://banodoctor.com/public/Bano-Doctor-Logo.png" >
             </div>-->
             </div>
             
             <div class="country-content-box">
                 
                
                 
                  <a href="{{ url(''.$widget->slug)}}" class="text-white"><h3 class="title"> {{ $widget->title}} </h3></a></div>
         </div>
         
         @endforeach
         
        </div>
    </div>

</div>

<!-- End of states -->



@include('layouts.college-list')



<section class="test">
        <div class="container">
            <h3 class="heading text-center mb-5">Some words from our customers</h3>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="{{ asset('assets/images/photo-young-female-doctor-make-okaysign-blue_496169-2165.jpg')}}"
                        class="img-fluid" alt="Testimonals of Bano Doctor">
                </div> 
                <div class="col-lg-7 col-md-12 col-sm-12">

                   <div id="testim" class="testim">
<!--         <div class="testim-cover"> -->
            <div class="wrap">
   <a href="javascript:void(0);" class="control-slider btn-left" id="right-arrow" area-label="Button Left Side Navigation ">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="javascript:void(0);" class="control-slider btn-right" id="left-arrow" area-label="Button right Side Navigation ">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            
                            
              
               <ul id="testim-dots" class="dots">
                    
                      @foreach($reviews as $review)
                     
                    
                     <li class="dot "></li>
                     
                    @endforeach
                     
                     
                 
                </ul>
                <div id="testim-content" class="cont slider-container" >
            
                     @foreach($reviews as $review) 
                     
                     
                    <div class="slider-box">
                        <div class="img">
                       <img  src="{{ asset('review/'.$review->image) }}" alt="Bano Doctor Testimonial Review" class="bano-reviews" />
                         </div>
                         
                        <p class="testimonial_head">{{ $review->name }}</p>
                        <!-- <h3>ajay</h3> -->
                      <div class="comment">{!! $review->review !!}</div>
                                      
                    </div>

                 @endforeach

                </div>

            </div>
<!--         </div> -->
    </div>

                </div>
            </div>
        </div>
    </section>


<!-- Latest Blog Section -->






<!--End of Client Carousel-->


<!-- Contact Section Start -->


<div class="section mb-7 conatct_us">

    <div class="container">
        
        
        <div class="row  ">
            
            <div class="col-lg-7 col-md-6 px-0 first" >
                
               
  
              
               @include('layouts.contactus')
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 cont px-0 second">


<div class="contact_info_sec text-white">
    <h3 class="text-white">Contact Info</h3>
    <!--<div class="d-flex  info_single align-items-center">-->
    <!--    <i class="fas fa-headset"></i>-->
    <!--    <span>+91-7880109834</span>-->
    <!--</div>-->
    <!--<div class="info_single"> <i class="fas fa-headset icon"></i>-->
    <!--    <span>+91 7880109839</span>-->
    <!--</div>-->
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-envelope-open-text"></i>
        <span>support@banodoctor.com</span>
    </div>
    <div class="info_single"><i class="fas fa-envelope-open-text"></i>
        <span>info@banodoctor.com</span>
    </div>
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-map-marked-alt"></i>
        <span>
         
         
Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 451020
info@banodoctor.com
         </span>

    </div>



</div>
</div>
        </div>
    



</div>


</div>

<!--- End Of Contact Section -->

<!-- Modal -->
<div class="modal fade modal-cls" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" id="exampleModalLabel">Apply For Live Counselling</span>
        <button type="button" class="btn-close upmodal" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container">
           <div class="row">
              
               <div class="col-md-12"> @include('layouts.contactus')</div>
   <!--             <div class="col-md-6"> <h4 class="latest-news-section">Latest News</h4>-->
   <!--             <p class="parag">Catch the latest and up-to-date developments regarding admissions and important exams in one glance.</p>-->
             
   <!--                 <ul>-->
   <!--                 @foreach($all_news as $n)-->
                  
   <!--                        <li> <a class="hyper-news-link" href="{{ url('news/'.$n->slug)}}" aria-label="{{ $n->title }}" >-->
   <!--                          {{ $n->title }}-->
                                
   <!--                         </a></li>-->
                  
   <!--                 @endforeach-->
   <!--                 </ul>-->
   <!--</div>-->
           </div>
       </div> 
       
        
      </div>
      
    </div>
  </div>
</div>

<!-- Sticky Disclaimer Bar -->
<!--<div id="disclaimerBar" class="disclaimer-bar">-->
<!--  <div class="disclaimer-content">-->
<!--    <p>-->
<!--      <strong>BanoDoctor.com</strong> content is protected by copyright. Reuse of any text, image, or information without permission is strictly prohibited. Legal action will be taken for unauthorized use.-->
<!--    </p>-->
<!--    <button id="closeDisclaimer">I Understand</button>-->
<!--  </div>-->
<!--</div>-->

<style>
  .disclaimer-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #fff3cd;
    color: #856404;
    border-top: 1px solid #ffeeba;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    animation: slideUp 0.3s ease-in-out;
  }

  .disclaimer-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .disclaimer-content p {
    margin: 0;
    font-size: 14px;
    flex: 1;
  }

  #closeDisclaimer {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    margin-left: 15px;
  }

  #closeDisclaimer:hover {
    background-color: #218838;
  }

  @keyframes slideUp {
    from { transform: translateY(100%); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }
</style>

<script>
//   $(document).ready(function () {
//     $('#closeDisclaimer').on('click', function () {
//       $('#disclaimerBar').slideUp();
//     });
//   });
// </script>


@endSection()
