  

 
 @if($page->image!=="")
 
  <div class="mb-5" class="vi-manage"">
           
            <img src="{{asset('page/'.$page->image)}}" class="img-fluid" alt="{{$page->title}}">
  </div>
            
  @endif    
  
   @if($page->video_embedding!=="")
 
   <div class="vi-manage" id="videoEmbeddingSection">
            {!! $page->video_embedding !!}
   </div>  
  @endif  
 
     
  <div class="shadow-sm rounded mb-5  mt-5 p-3" id="form-sticky-sidebar">
                
         
            @include('layouts.contactus')
            
            
            
 </div>
             
             
             

            
        