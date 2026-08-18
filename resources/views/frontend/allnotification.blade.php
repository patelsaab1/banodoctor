@extends('layouts.base')
@section('body')

<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1 class="text-white">List of News & Alerts</h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Notification</li>
  </ol>
</nav>
  </div> 

</div>

</div>

</div>
</div>

<div class="section mt-5 mb-5 ">


 <div class="wrapper">
        <div class="container">
            
            <h2 class="text-center">Latest News and Alerts - Medical Courses Updates  </h2>
          
          <div class="inner-wrapper">
                 @foreach($news as $post)
            <div class="card">
              <div class="inner-card">
                  <h3 class="news-title-custom">{{ $post->title}}</h3>
                <div class="img-wrapper">
                  <img src="{{ asset('notifications/'.$post->image)}}" alt="{{ $post->title }}" class="img-full-style">
                </div>
                <div class="content">
                 
                 
                </div>
                <div class="btn-wrapper">
                  <a class="btn btn-primary" href="{{ route('single-news',$post->slug) }}">View More </a>
                </div>
              </div>
            </div>
                 @endforeach
          </div>
        </div>
      </div>
    

   
   
</div>



@endSection()
