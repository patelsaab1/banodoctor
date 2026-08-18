<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                <div class="col-md-12 mt-2 ">
                    <h3> Update  Page - {{ $page->title }}</h3>
                    <div class="card">
                        <div class="card-body">
                            
                            
                               @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                            
                            
                            <form action="{{ route('page-edit',$page->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Page Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="page_title" id="page_title" placeholder="Enter Page Title (H1 Tag)"  value="{{ $page->page_title }}">

                                        </div>
                                </div>
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Page Sub Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="page_subtitle" id="page_subtitle" placeholder="Enter Page Sub Title(H2 Tag) "  value="{{ $page->page_subtitle }}">

                                        </div>
                                </div>
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Page Short Description
                                        <div class="col-12">



                                            <textarea class="form-control" name="page_shortdescription" id="page_shortdescription" placeholder="Enter Page short description "  >{{ $page->page_shortdescription }}</textarea>

                                        </div>
                                </div>


<hr>

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page Title "  value="{{ $page->title }}">

                                        </div>
                                </div>





                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-form-label">Page Content</label>
                                    <div class="col-12">



                                        <textarea class="form-control ckeditor" rows="5" name="content" id="content" placeholder="Write short description">{{ $page->content }}</textarea>

<span id="output" class="text-danger">Total</span>
                                    </div>
                                </div>
                                
                                
                              
                                

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="image" id="image">
                                            
                                            <br>
                                            <img src="{{ asset('page/'.$page->image) }}" width="200" >  

                                        </div>
                                </div>
                                
                                
                                
                                  <div class="row">
                                      
                                      
                              <div class="col-md-4 mb-3">
                        <label>Page Type </label>
                        
                      
                               
                               
                        <select name="page_type" id="page_type" class="form-control">
                                <option value="">Select Page Type</option>
                                <option value="state" {{ $page->page_type =='state'? 'selected' : '' }}> State</option>
                                <option value="country" {{ $page->page_type =='country'? 'selected' : '' }}>Country </option>
                            
                        </select>
                    </div>
                    
                    
                    
                                      
                    <div class="col-md-4 mb-3">
                        <label>Country</label>
                        <select name="country" id="country" class="form-control">
                            @foreach($country as $c)
                                <option value="{{ $c->name }}" {{ $c->name == $page->country ? 'selected' : '' }}>{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>State</label>
                        
                        
                        <select name="state" id="state" class="form-control">
                            
                            <option value="">Select State</option>
                            
                            
                            
                            @foreach($states as $state)
                                <option value="{{ $state->name }}" {{ $state->name == $page->state ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                      <div class="col-md-4 mb-3">
                        <label>Select Course</label>
                        <select name="course" class="form-control">
                            <option value="">Select Course</option>
                            @foreach($courses as $c)
                                <option value="{{ $c->title }}" {{ $c->title == $page->course ? 'selected' : '' }}>{{ $c->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    </div>
                        

                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Update</button>
                                         <a href="{{ route('page-view') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </section>
   <section>
       
       <div class="container">
           <div class="card">
                <div class="card-body">
                     <form action="{{ route('page.embed.video',$page->id)}}" method="post">
                         @csrf
               <textarea name="video_embedding" class="form-control" placeholder="Embed Youtube Video">{{ $page->video_embedding }}</textarea>
               <button type="submit" class="btn btn-primary mt-3">Submit</button>
           </form>
               
           </div>
           </div>
          
       </div>
   </section>
   
   
   
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country').on('change', function () {
                var Country = this.value;
                $("#state").html('');
                $.ajax({
                    url: "{{route('get-state-list')}}",
                    type: "POST",
                    data: {
                        country: Country,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                    
                    }
                });
            });
            
        });
        </script>



</x-app-layout>
