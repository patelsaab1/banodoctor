@extends('layouts.base')
@section('body')


@php

$faq_title= $blog->title
@endphp



<div class="hero section page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1 class="text-white">{{ $blog->title}}</h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
  
    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title}}</li>
  </ol>
</nav>
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
    
      <div class="content-layout">
     
        {!! $blog->content !!}

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