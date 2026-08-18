@extends('layouts.base')
@section('body')


@php

$faq_title= $news->title
@endphp


<div class="hero-section">
<div class="container-fluid section-banner banner-img">

<div class="container">
    <div class="row">
    <div class="col-md-12">
     
         
         
<div class="brad-club">      
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb text-center">
    <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
    <li class="breadcrumb-item " aria-current="page"><a href="{{ url('/news/'.$news->slug)}}" class="active text-red">News & Alerts</a></li>
   
  </ol>

 


</nav>
  <h1 class="navs-color">{{ $news->title }}</h1>
      
  
     
     </div>
     
 

</div>

</div>
</div>
</div>

</div>




<section class="single-pager-blog mt-5">

  <div class="container-fluid" >
<div class="row">
     <div class="col-lg-2">
                  <div class="topstick">
                   
               
                       
                    <div class="third">
                      <span class="quick">Quick Links</span>
                      {!! $pageLinks !!}
                      
                      
                      
                      
                       </div>
                </div>
</div>
<div class="col-md-7 mb-5 p-2">
    <div class="news-content">
       <h2> {{ $news->title }}</h2>
        
        {!! $news->content !!}

    </div>
    
    
    
       
   <div class="news-content text-center">
   <img src="{{asset('notifications/'.$news->image)}}" class="img-fluid" alt=" {{ $news->title }} " />
   
   </div>
   
    
       
    <div class="faq-layout">
     
           @include('layouts.faq-layout')
    </div>
    

    
 
</div>




 <div class="col-lg-3">
                    <div class="fourth">
                      
                   
                  

                      @include('layouts.contactus')
               
                     
                    </div>
                </div>
</div>
</div>
</section>

@endSection()