<x-app-layout>

    <section>
        <div class="container py-2">
            
             @if(session()->has('success'))
             
             <div class="alert alert-success">{{ session()->get('success') }}</div>
             
             @endif
             

            <div class="row d-flex justify-content-center">


                <div class="col-md-12 mt-2 ">
                  
                    <div class="card">
                        <div class="card-body">
                           
                            
                            <form action="{{ route('widget.edit',$widget->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                
                                  <input type="text" class="form-control" name="title" id="title" value="{{ $widget->title }}">

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="image" id="image">
 
                                        </div>
                                        <span class="text-danger">Image Size 256x256, 100kb only </span>
                                        
                                       <img src="{{ asset('widget/'.$widget->image)}}" width="256px">
                                        
                                </div>
                                
                                
                                
                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="page_image" id="image">
 
                                        </div>
                                        <span class="text-danger">Image Size 256x256, 100kb only </span>
                                        
                                       <img src="{{ asset('widget/page_image/'.$widget->page_image)}}" width="256px">
                                        
                                </div>
                                
                                

                       <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Content
                                        <div class="col-12">
                                            
                                            <textarea class="form-control ckeditor"  name="content" id="content">{{ $widget->content }}</textarea>
                                            </div>
                     </div>

                  



                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>






               
            </div>
             <div class="col-md-6 mt-2 ">
                   
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $widget->title }}</h3>
                            
                            <form action="{{ route('widget.edit.url',$widget->id) }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Page Slug"  value="{{ $widget->slug}}" readonly>
 
                                        </div>
                                       
                                        
                                </div>






                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>






               
            </div>
        </div>
        
       
    </section>


</x-app-layout>