@extends('layouts.base')
@section('body')

<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1>List of ALL Colleges</h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0);">Page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Colleges</li>
  </ol>
</nav>
  </div> 

</div>

</div>

</div>
</div>

<section class="single-pager-blog mt-5">

  <div class="container-fluid" >
        
          <h2>Top Colleges for Medical Courses</h2>
            <div class="tagline-style"></div>
      

            <div class="row">
                
                <div class="col-lg-2">
                  <div class="topstick">
                   
               
                       
                    <div class="third">
                       <h3 class="quick">Quick Links</h3>
                      {!! $pageLinks !!}
                      
                      
                      
                      
                       </div>
                </div>
</div>
      
            <div class="col-lg-7 col-md-12 ">
                
            <div class="h-search-form text-center">
   
      <input type="text"  placeholder="Search.."   id="searchCollegeLive" name="searchCollegeLive">
      
 
      </div>
      
            <div class="separate">
                <div class="row"  id="collegesSection">
                @foreach($colleges as $post)
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                     <a href="{{url('college/'.$post->slug)}}" alt="{{ $post->name }}">
                    <div class="card mt-2 p-1">
                        <div class="image-box ">
                            <img src="{{ asset('college/'.$post->card_image)}}" alt="{{$post->seo_meta_title}}" class="img-fluid rounded" >
                    </div>   
                    <div class="college-content-box pt-2">
                        <h4 class="title news-title-custom">{{$post->seo_meta_title}}</h4>
                        <hr/>
                        <p><span>{{ $post->address }}<span>
                      
                        </p>
                        
                     </div>
                   
                </div>
                </a>
                    </div>
                    @endforeach



        </div>
    </div>
   
                  
                    

        

       

        </div>
        
        
         <div class="col-lg-3">
                    <div class="fourth">

                  

                    <h3 class="title-text">Get in touch if have any query</h3>
                      @include('layouts.contactus')
               
                     
                    </div>
                </div>
        

    


</div>
</div>

</section>





@endSection()

 
