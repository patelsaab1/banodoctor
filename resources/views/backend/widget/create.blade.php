<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">
                
                 @if(session()->has('success'))
             
             <div class="alert alert-success">{{ session()->get('success') }}</div>
             
             @endif


                <div class="col-md-3 mt-2 ">
                    <h3> Create Widgets</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('widget') }}" method="post" enctype="multipart/form-data">
                                @csrf

<div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Widget Category
                                        <div class="col-12">



                                            <select class="form-control" name="widget_category" id="widget_category" >
                                                <option value="1">PG MDMS Courses</option>
                                                 <option value="2">Country</option>
                                                 <option value="3">State</option>
                                            </select>

                                        </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Title
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title ">

                                        </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Icon
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Icon" value='<i class="fa fa-university" aria-hidden="true"></i>'>

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
                                        <span class="text-danger">Image Size 256x256, 14-20kb only </span>
                                        
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






                <div class="col-md-9 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"   id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>

                                               <th scope="col">Url</th>
                                            
                                            <th scope="col">image</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record )
                                        <tr class="">
                                            <td scope="row">{{ $record->title}}</td>
                                            
                                           <td>@if($record->widget_category==1)
                                           
                                               {{ url('course/'.$record->slug) }}
                                              @endif 
                                              
                                              @if($record->widget_category==2)
                                           
                                               {{ url(''.$record->slug) }}
                                              @endif 
                                              
                                              
                                               </td>
                                            <td>
                                                
                                                
                                               Page Image-   <img src="{{ asset('widget/page_image/'.$record->page_image)}}" width="256px">
                                                 <hr>
                                                 
                                                Icon Image -<img src="{{ asset('widget/'.$record->image)}}" width="30"> </td>
                                            <td>{!! $record->icon !!}</td>

                                            <td>
                                                <a href="{{ route('widget.edit',$record->id) }}"><i class="fa fa-cog text-success"></i></a>
                                                  <a href="{{ route('widget-edit-seo',$record->id)}}" title="Click here to update information"><i class="fa fa-pencil text-warning"></i></a>
                                                <!--<a href=""><i class="fa fa-trash text-danger"></i></a>-->
                                               

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