@extends('layouts.base')
@section('body')

<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h2>List of ALL Colleges</h2>
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

<div class="section list-of-colleges  mt-5 mb-5 ">

  <div class="container-fluid" >
        
          <h3>Top Colleges for Medical Courses</h3>
            <div class="tagline-style"></div>
      

            <div class="row">
      
        <div class="col-lg-9 col-md-12 ">
            <div class="separate">
                <div class="row">
                @foreach($colleges as $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mt-2 p-3">
                        <div class="image-box ">
                            <img src="{{ asset('college/'.$post->card_image)}}" alt="{{$post->name}}" class="img-fluid rounded" >
                    </div>   
                    <div class="college-content-box pt-2">
                        <h3 class="title">{{ $post->name }}</h3>
                        <p>{{ $post->address }}</p>
                     </div>
                     <a href="{{url('college/'.$post->slug)}}" class="know-more btn loc_btn">View More</a>
                    </div></div>
                    @endforeach



        </div>
    </div>
   
                  
                    

        

       

        </div>
        

    


</div>
</div>
@endSection()
