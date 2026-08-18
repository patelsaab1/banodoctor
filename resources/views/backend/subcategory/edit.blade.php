<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


                <div class="col-md-12 mt-2 ">
                    <h3> Create Course Category</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('update.subcategory.image',$record->id) }}" method="post" enctype="multipart/form-data">
                                @csrf


                              

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title " value="{{$record->title}}">

                                        </div>
                                </div>


                             


        

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Image
                                        <div class="col-12">



                                            <input type="file" class="form-control" name="image" id="image">
                                            
                                            <label class="text-danger">Image Size can not be more than 100kb</label>

                                        </div>
                                </div>

                                 <img src="{{ asset('subcategory/'.$record->image) }}" height='200'>




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