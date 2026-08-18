<section id="features" class="features section mt-7 mb-7 course-section">
    
    

<div class="container">
<ul class="nav nav-tabs row d-flex ">
               

            @foreach($category as $course)
         
         
         
          <li class="nav-item col-4" data-aos="zoom-in">
                    <a class="nav-link  {{ $course['category']['id']===1?'active show':'' }} "  data-bs-toggle="tab"  href="#tab-{{ $course['category']['id']}}" area-label="{{$course['category']['title']}}">
                        <i class="fa-solid fa-square-poll-vertical d-lg-block d-none"></i>
                        <h3 class=" d-lg-block">{{ $course['category']['title'] }}</h3>
                    </a>
                </li>
          
     
       @endforeach    


              
               
            </ul> 
            
          
                
                <div class="tab-content" data-aos="fade-up">


            @foreach($category as $course)
            
           
                      
                      
                       
           

                <div class="tab-pane {{ $course['category']['id']===1?'active show':'' }}" id="tab-{{$course['category']['id'] }}">
                    <div class="row">
                        
                        <div class="col-lg-12 mt-3 mt-lg-0 text-center">
                            <h3> {{ $course['category']['title'] }} </h3>
                             {!! $course['category']['content'] !!} 
                          
                            <div class="features-card mt-5">
                                <div class="container">

                                
                             
                                  

                                    <div class="row align-items-center">

                                    @foreach( $course['subcategory'] as $degree)

                                   

                                        <div class="col-lg-4 col-md-6">
                                            <div class="post">
                                                <img src="{{ asset('subcategory/'.$degree->image) }}" alt="Medical Course {{ $degree->title }}" id="info-for-image{{$degree->id}}"
                                                    class="post-img">
                                                <div class="post-content text-white text-center">
                                                <h3>{{ $degree->title }}</h3>
                                                
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                   

                                  
                                       </div>
                            </div>
                            </div>
                           
                               
                   
                            </div>

</div>
</div>

                @endforeach
               
</div>
</section>



  