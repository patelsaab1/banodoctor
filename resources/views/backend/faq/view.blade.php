<x-app-layout>
     <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">




                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3>Faqs</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                               
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Question </th>
                                            <th scope="col">Answer</th>
                                            <th scope="col">Type</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                           
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        
                                        <tr class="">
                                            <td scope="row">{{ $i }}</td>
                                            <td scope="row">{{ $record->question}}</td>
                                            <td scope="row">{!! $record->answer !!}</td>
                                            
                                            <td scope="row">{{ $record->post_type}}</td>
                                            
                                             <td scope="row">  <a href="{{route('faq.post.update',$record->id)}}" target="_blank">Edit</a>
                                             <a href="{{route('faq.post.delete',$record->id)}}"  class="text-danger">Delete</a>
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