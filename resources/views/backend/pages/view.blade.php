<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">




                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of All Pages  <a href="{{ route('page') }}" class="btn btn-primary bg-dark float-end"  >Add New</a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%" >
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th></th>
                                            <th scope="col">Page Title</th>
                                             <th scope="col">Page Type </th>
                                             <th scope="col">Country</th>
                                             
                                              <th scope="col">State</th>
                                               <th scope="col">Course</th>
                                               
                                               
                                           <th scope="col">Slug</th>
                                             <th scope="col">Faqs</th>
                                             
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            
                                            <td scope="row">{{ $i }}</td>
                                            <td><img src="{{asset('page/'.$record->image)}}" height="150px"></td>
                                            <td scope="row">{{ $record->title}}</td>
                                            <td scope="row">{{ $record->page_type }}</td>
                                            
                                            <td scope="row">{{ $record->country }}</td>
                                            
                                            <td scope="row">{{ $record->state}}</td>
                                            
                                            <td scope="row">{{ $record->course}}</td>
                                            
                                           <td> {{ url('/'.$record->slug )}}</td>
                                             <td> <a href="{{route('faq-create',$record->id)}}" target="_blank">Faq's ({{$record->faqCount}}) </a>
                                              </td>
                                             
                                            <td>
                                                <a href="{{ url('/'.$record->slug )}}" target="_blank"><i class="fa fa-eye primary"> </i> </a>
                                            
                                                <a href="{{ route('page-edit',$record->id)}}" target="_blank" title="Click here to edit page content"><i class="fa fa-cog text-success"></i></a>
                                                <a href="{{ route('page-edit-seo',$record->id)}}" title="Click here to edit seo information"><i class="fa fa-pencil text-warning"></i></a>
                                                
                                               
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