<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


                <div class="col-md-6 mt-2 ">
                    <h3> Create Course Category</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('review') }}" method="post" enctype="multipart/form-data">
                                @csrf




                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Name
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name ">

                                        </div>
                                </div>


   <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Rating
                                        <div class="col-12">



                                            <select class="form-control" name="rating" id="rating" >
                                                <option>5</option>
                                                 <option>4</option>
                                                 <option>3</option>
                                                 <option>2</option>
                                                 <option>1</option>
                                            </select>

                                        </div>
                                </div>


                              

                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-form-label">Review</label>
                                    <div class="col-12">



                                        <textarea class="form-control ckeditor" rows="5" name="review" id="review" placeholder="Write Review Here"></textarea>

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