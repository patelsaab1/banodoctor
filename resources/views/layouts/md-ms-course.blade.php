
<div class="section mt-7 mb-7 course-section services topmdms">
    <div class="container">
        <div class="row">
            
           
            <div class="col-md-12 mb-5 p-2">

                <h3>Top MD MS Courses</h3>
                  <div class="tagline-style"></div>
                <p>We provide consultation & admission services for MD/MS PG Medical Courses</p>
            </div>
<div class="owl-carousel owl-theme">
@foreach($widget as $w)


  <a href="{{ url('course/'.$w->slug) }}">  


<div >
                    <div class="card m-2">
                    <div class="backg">
                              
                              
                    <img src="{{ asset('widget/'.$w->image) }}" alt="PG Medical Courses {{ $w->title }}"  class="card-img-top " ></div>
                        <div class="main-div">
                       
                             
                                   
                                   
                                   
                                    <h3>{{ $w->title}}</h3>
                            
                                    
                                   
                        </div>
                    </div>
                </div>
                



         
                      
                      
            

@endforeach

</div>        </div>




    </div>


</div>

