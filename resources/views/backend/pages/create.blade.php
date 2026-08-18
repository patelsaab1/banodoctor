<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                <div class="col-md-12 mt-2 "><a href="{{ route('page-view') }}" class="btn btn-primary bg-dark float-end"  >View All Pages</a>
                    <h3> Create New Page</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('page') }}" method="post" enctype="multipart/form-data">
                                @csrf




                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page Title "  value="{{ old('title')}}">

                                        </div>
                                </div>





                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-form-label">Page Content</label>
                                    <div class="col-12">



                                        <textarea class="form-control ckeditor" rows="5" name="content" id="content" placeholder="Write short description">{{ old('content') }}</textarea>

                                    </div>
                                </div>
                                
                                
                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="image" id="image">

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
