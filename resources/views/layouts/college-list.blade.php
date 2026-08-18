<!-- Top Universities Carousel -->

<!-- zzzzzzzzzzzzzzzz -->
<div class="section mt-7 mb-7" >
    

    <div class="container" >
        
          <h3>List of Top Colleges for Medical Courses</h3>
            <div class="tagline-style"></div>
      

          <div class="row owl-carousel-college owl-theme">
            
            @foreach($colleges as $post)
             <a href="{{url('college/'.$post->slug)}}" >
            <div class="college-box m-3">
                
                <div class="college-img-box">
               <img src="{{ asset('college/'.$post->card_image)}}" alt="{{$post->name}}" class="img-fluid">
                 </div>
               
              
                <div class="image-box">
                 <div class="ribbon"><span class="ribbon-content">Top Medical College</span></div>
                  <div class="college-overlay"></div>

                    
                   
                      
                     
                    
                
               </div>   
                
                <div class="college-content-box">
                    
                              <h3 class="title">{{ $post->name }}</h3>
                              <hr>
                              <p>{{ $post->state }},{{ $post->country }}</p>
                            
                            
                
                </div>
                
            
                </div>
           
           </a>
           
            
           
            
            @endforeach



        </div>
    </div>
</div>
<!--End of Universities Carousel-->



<!-- Top Universities Carousel -->

<div class="section mt-7 mb-7"  >
    
    

    <div class="container">
        
         <h3>List of Top Deemed Universities</h3>
           <div class="tagline-style"></div>
       

          <div class="row owl-carousel-college owl-theme">
            
            @foreach($universities as $post)
            
            
             <a href="{{url('college/'.$post->slug)}}" >
            <div class="college-box m-3">
                
             <div class="college-img-box">
                  <img src="{{ asset('college/'.$post->card_image)}}" alt="Bano Doctor Top Deemed Universities" class="img-fluid">
                 
               </div>
              
                <div class="image-box">
                 <div class="ribbon"><span class="ribbon-content">Top Medical College</span></div>
                  <div class="college-overlay"></div>

                    
                   
                      
                     
                    
                
               </div>   
                
                <div class="college-content-box">
                    
                              <h3 class="title">{{ $post->name }}</h3>
                            <p>{{ $post->state }},{{ $post->country }}</p>
                            
                            
                
                </div>
                
                  
                </div>
           
            </a>
           
           
           
            
            @endforeach

 

        </div>
    </div>
</div>
<!--End of Universities Carousel-->
