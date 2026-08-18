<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">




                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of All Post  <a href="{{ route('blog') }}" class="btn btn-primary bg-dark float-end"  >Add New</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Post Title</th>
                                            <th scope="col">Slug</th>
                                              <th scope="col">Page Indexing</th>
                                            <th scope="col">Image</th>
                                           
                                           
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            <td scope="row">{{ $i }}</td>
                                            <td scope="row">{{ $record->title}}</td>
                                            
                                            <td scope="row">{{ url('/blog/'.$record->slug )}}</td>
                                            
                                            
                                              <td><a href="{{ route('blog-add-faq',$record->id)}}" title="Click here to edit seo meta information">Add/View Faq</a></td>
                                           
                                          <td> <img src="{{ asset('blog/'.$record->image )}}" width="100"></td>
                                            <td>
                                                <a href="{{ url('/blog/'.$record->slug )}}" target="_blank" title="Click hete to view page contents"><i class="fa fa-eye primary"></i></a>
                                                <a href="{{ route('blog-edit',$record->id)}}" title="Click here to edit page contents"><i class="fa fa-cog text-success"></i></a>
                                                
                                                  <a href="{{ route('blog-edit-seo',$record->id)}}" title="Click here to edit seo meta information"><i class="fa fa-pencil text-warning"></i></a>
                                                  
                                                  
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