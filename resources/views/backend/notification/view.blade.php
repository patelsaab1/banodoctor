<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">




                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of All News  <a href="{{ route('notice') }}" class="btn btn-primary bg-dark float-end"  >Add New</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Post Title</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Faq</th>
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
                                            
                                            <td scope="row">{{ url('/news/'.$record->slug )}}</td>
                                            
                                            <td><a href="{{ route('news-add-faq',$record->id)}}" title="Click here to edit seo meta information">Add/View Faq</a></td>
                                            
                                            
                                           
                                          <td> <img src="{{ asset('notifications/'.$record->image )}}" width="100"></td>
                                            <td>
                                                <a href="{{ url('/news/'.$record->slug )}}" target="_blank" title="Click hete to view page contents"><i class="fa fa-eye primary"></i></a>
                                               
                                               
                                              
                                               
                                                  
                                                  
                                                 <a href="{{ route('notice-edit',$record->id) }}"><i class="fa fa-pencil text-success"></i></a>
                                                 
                                                   <a href="{{  route('news-edit-seo',$record->id) }}" target="_blank" title="Click hete to view page contents">seo</a>
                                                 
                                                
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