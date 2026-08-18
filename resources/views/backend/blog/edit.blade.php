<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-12 mt-2 ">
                    <h3> Update Blog Post <a href="{{ route('blog-view')}}" class="btn btn-primary bg-dark float-end" >View All </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blog-edit',$blog->id) }}" method="post" enctype="multipart/form-data">
                                @csrf




                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Post Title</label>
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Post  Title " value="{{ $blog->title }}">

                                        </div>
                                </div>
                                
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Post Content </label>
                                        <div class="col-12">



                                            <textarea  class="form-control ckeditor" name="content" id="content" >{{ $blog->content }}</textarea>

                                        </div>
                                </div>


                            
                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image</label>
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="image" id="image">
                                            
                                            <img src="{{ asset('blog/'.$blog->image)}}" width="250px" height="250px">

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