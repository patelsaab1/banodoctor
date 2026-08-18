<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


                <div class="col-md-4 mt-2 ">
                    <h3> Create Testimony Google Reviews From Here</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('category') }}" method="post" enctype="multipart/form-data">
                                @csrf




                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title ">

                                        </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Icon
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Icon" value='<i class="fa fa-graduation-cap" aria-hidden="true"></i>'>

                                        </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-form-label">Short Description</label>
                                    <div class="col-12">



                                        <textarea class="form-control" rows="5" name="content" id="content" placeholder="Write short description"></textarea>

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






                <div class="col-md-8 mt-2">
                    <h3> List of Course Categories</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"   id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>


                                            <th scope="col">Description</th>
                                            <th scope="col">image</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record )
                                        <tr class="">
                                            <td scope="row">{{ $record->title}}</td>
                                            <td>{!! $record->content !!}</td>
                                            <td><img src="{{ asset('category/'.$record->image)}}" width="30"> </td>
                                            <td>{!! $record->icon !!}</td>

                                            <td>
                                                <a href=""><i class="fa fa-cog text-success"></i></a>
                                                <a href=""><i class="fa fa-trash text-danger"></i></a>

                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>