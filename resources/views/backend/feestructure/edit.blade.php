<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-12 mt-2 ">
                    <h3> Create New Fee Structure <a href="{{ route('fee-structure-view')}}" class="btn btn-primary bg-dark float-end" >View All </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('edit-fee-structure',$fee->id) }}" method="post" enctype="multipart/form-data">
                                @csrf




                                   <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title</label>
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Enter Title  Here "  value="{{ $fee->table_name}}">

                                        </div>
                                </div>

<div class="mb-3 row">
    <div class="col-12">
        <label class="col-form-label">Select Page</label>
        <div>
            @foreach($pages as $page)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="page_id" id="page_{{ $page->id }}" value="{{ $page->id }}" {{ $page->id == $fee->page_id ? 'checked' : '' }} required>
                    <label class="form-check-label" for="page_{{ $page->id }}">
                        {{ $page->title }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>

                                        
                                <div class="mb-3 row">
                                   
                                     <div class="col-4">

                                             <label for="inputIcon" class="col-form-label">Course</label>

                                            <select class="form-control" name="course" id="course" required>
                                                
                                                <option value="" >--Select Course --</option>
                                                @foreach($courses as $c)
                                                <option {{ $fee->course==$c->title?'selected':''}}>{{ $c->title}}</option>
                                                @endforeach
                                            </select>        
                                            
                                        </div>
                                        
                                        
                                       
                                          <div class="col-4">

                                             <label for="inputIcon" class="col-form-label">Country</label>

                                            <select class="form-control" name="country" id="country" required>
                                                
                                                <option value="" >--Select Country --</option>
                                                @foreach($country as $c)
                                                <option {{ $fee->country==$c->name?'selected':''}}>{{ $c->name}}</option>
                                                @endforeach
                                            </select>        
                                            
                                        </div>
                                        
                                        <div class="col-4">

                                             <label for="inputIcon" class="col-form-label">State</label>

                                            <select class="form-control" name="state" id="state" required>
                                                <option value="" >--Select State Name --</option>
                                                  <option selected>{{ $fee->state }}</option>
                                               
                                            </select> 

                                        </div>
                                </div>
                                
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Post Fee Table Content </label>
                                        <div class="col-12">



                                            <textarea  class="form-control ckeditor" name="table_post" id="table_post" >{{ $fee->table_post}}</textarea>

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