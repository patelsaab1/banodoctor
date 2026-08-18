@extends('layouts.base')
@section('body')
<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1 class="text-white">{{ $page->title}}</h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">News</a></li>
  
    <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
  </ol>
</nav>
  </div> 

</div>

</div>

</div>
</div>




 <section class="single-pager-blog mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                  <div class="topstick">
                   
               
                       
                    <div class="third">
                      <span class="quick">Quick Links</span>
                      {!! $pageLinks !!}
                      
                      
                      
                      
                       </div>
                </div>
</div>
                <div class="col-lg-7 shadow-sm rounded p-3" >
            <div class="blog-content-style">
                
                <h2>{{ $page->title }}</h2>
                
                
                  
                  
 {!! $page->content !!}

                  </div>
   
      </div>
       
    <div class="col-lg-3">
                   <div id="image-section">
       <img src="{{asset('widget/page_image/'.$page->page_image)}}" class="img-fluid" alt="{{$page->title}}">
   </div>
   
      
        
        
                    <div class="fourth">

                  

                  
                      @include('layouts.contactus')
               
                     
                    </div>
                </div>
            </div>
        </div>
    </section>  
   

    
    
    


@endSection()