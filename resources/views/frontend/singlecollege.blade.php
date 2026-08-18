@extends('layouts.base')
@section('body')

@if (session('alert'))
    <script>
        alert('{{ session('alert') }}');
    </script>
@endif

@php

$faq_title=" Faqs of ".$college->name
@endphp



  <!-- Hero Section -->
    <section class="college-hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('college/'.$college->hero_section_image)}}'); height:300px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('college-list')}}">College</a></li>
                            <li class="breadcrumb-item active"><a  href="{{ url('/college/'.$college->slug)}}" >{{ $college->name }}</a></li>
                        </ol>
                    </nav>
                    
                    <h1 class="college-title text-white">{{ $college->title }}</h1>
                    
                      


                </div>
            </div>
        </div>
    </section>






@if(!empty($college))











 <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar - Navigation -->
            <div class="col-lg-2 col-md-4">
                <div class="sticky-sidebar">
                    <div class="sidebar-nav">
                        <strong class="d-block mb-3">Table of Contents</strong>
                        <a href="#overview" class="nav-link active">Overview</a>
                        <a href="#content" class="nav-link">Information</a>
                        <a href="#fee-structure" class="nav-link">Fees Structure</a>
                        <a href="#college-courses" class="nav-link">Offered Courses</a>
                        <a href="#college-cutoff" class="nav-link">Cutoff for College</a>
                        <a href="#neet-structure" class="nav-link">NEET UG Cutoff</a>
                        <a href="#admission-process" class="nav-link">Admission Process</a>
                        <a href="#document" class="nav-link">Documents</a>
                        <a href="#why-choose" class="nav-link">Why Choose Us?</a>
                        <a href="#faq" class="nav-link">FAQ</a>
                    </div>
                    
                   
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-7 col-md-8 mt-4">
                <h2 class="section-title">About {{$college->name}}</h2>
                
                
                {{$college->short_description}}
                
                
                
                
                <!-- Overview Section -->
                <section id="overview" class="content-section">
                   

   {!! $college->overview !!}


                    <div class="campus-image">
                        <img src="{{asset('college/'.$college->image)}}" class="img-fluid"  alt="{{ $college->name}}" >
                    </div>
                    
                    
                    @if(!empty($college->youtube_video_embed))
                    <div class="video-container">
                        <div class="ratio ratio-16x9">
                           {!! $college->youtube_video_embed !!}
                        </div>
                    </div>
                    
                   @endif
                </section>


            @if(!empty($college->content))
                <!-- Information Section -->
                <section id="content" class="content-section">
                     {!! $college->content !!}
                </section>
             @endif
             
             
              @if(!empty($college->fee_structure))
                <!-- Fee Structure -->
                <section id="fee-structure" class="content-section">
                      {!! $college->fee_structure !!}
                </section>
              @endif  
              
               @if(!empty($college->courses))
                <!-- Courses Section -->
                <section id="college-courses" class="content-section">
                   {!! $college->courses !!}
                </section>
               @endif
               
                @if(!empty($college->cutoff))
                <!-- More sections would continue here with the same pattern -->
                <section id="college-cutoff" class="content-section">
                       {!! $college->cutoff !!}
                </section>
                @endif
              
              
                <!-- NEET Section -->
                <section id="neet-structure" class="content-section">
                    @include('layouts.neet-ug')

                </section>
              @if(!empty($college->admission_process))
                <!-- Admission Process -->
                <section id="admission-process" class="content-section">
                    {!! $college->admission_process !!}
                    
                </section>
              @endif
              
              
              @if(!empty($college->documents))
                <!-- Documents Section -->
                <section id="document" class="content-section">
                   {!! $college->documents !!}
                    
                </section>
               @endif
               
                @if(!empty($college->why_banodoctor))
                
                <!-- Why Choose Section -->
                <section id="why-choose" class="content-section">
                  
                      {!! $college->why_banodoctor !!}
                </section>
                
                @endif
                
        <div class="mb-3" class="content-section">
         
     
           @include('layouts.faq-layout')
  
          </div>
               
                
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-3">
                <div class="right-sidebar">
                    <!-- Contact Form -->
                
                  @include('layouts.contactus')
                    
                     <div class="quick-links">
                        <strong class="d-block mb-3">View Also Another Colleges </strong>
                       
                         @foreach($otherColleges as $co)
          
          <a href="{{url('/college/'.$co->slug)}}" target="_blank">{{ $co->name }}</a>
          
          @endforeach
                       
                    </div>
                    
                     
                    <div class="content-section">
                        <h4 class="mb-3">Call Us Today</h4>
                        <p><i class="fa fa-map-marker-alt me-2 text-primary"></i> Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 451020 </p>
                        <p><i class="fa fa-phone me-2 text-primary"></i> 7880109834 </p>
                        <p><i class="fa fa-envelope me-2 text-primary"></i> info@banodoctor.com</p>
                       
                    </div>
                    
                  
                    <div class="content-section">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    

@endif


<script>
    
     document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Scroll to target section
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                window.scrollTo({
                    top: targetSection.offsetTop - 20,
                    behavior: 'smooth'
                });
            });
        });

        // Update active link on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.content-section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollY >= sectionTop - 400) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === currentSection) {
                    link.classList.add('active');
                }
            });
        });

     
</script>
@endSection()


