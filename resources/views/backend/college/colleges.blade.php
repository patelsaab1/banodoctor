<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


    
            



                <div class="col-md-12 mt-2">
                    <h3> List of All Colleges - {{ $state }} </h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"   id="collegeList" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                           th scope="col">Date</th>
                                           
                                            <th scope="col">College</th>
                                            
                                            <th scope="col">Page Link</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            <td><?=$i?></td>
                                            <td scope="row">{{ $record->college_name}}</td>
                                           
                                            
                                             <td>
                                                 
                                                 <form method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $record->id}}">
                                                    <select name="college_id">
                                                        
                                                        @foreach($colleges as $college)
                                                        <option value="{{ $college->id}}" 
                                                        @if($record->college_id==$college->id)
                                                        
                                                        selected
                                                        @endif 
                                                        
                                                        >{{ $college->name }},
                                                       
                                                        City-{{ $college->city }}
                                                        
                                                        </option>
                                                            @endforeach
                                                        
                                                    </select>
                                                    
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </form>
                                                
                                                </td>
                                            
                                            <td>
                                                
                                                <form action="{{ route('indexing-status-update',$record->id) }}" method="post">
                                                    
                                                   @csrf
                                                   <select class="form-control" name="page_indexing_status">
                                                           <option {{ $record->page_indexing_status=='No'?'selected':''}}>
                                                    No
                                                </option>
                                                
                                                        <option {{ $record->page_indexing_status=='Yes'?'selected':''}}>
                                                    Yes
                                                </option>
                                                
                                                   
                                                      <option {{ $record->page_indexing_status=='Requested'?'selected':''}}>
                                                    Requested
                                                </option>
                                                
                                                </select>
                                                
                                                <button type="submit" class="btn btn-success"> Submit </button>
                                                
                                                </form>
                                                </td>
                                           <td>{{ $record->state }}</td>
                                            <td>{{ $record->address }}</td>
                                           
                                            <td>
                                                
                                                <a href="{{ url('/college/'.$record->slug )}}" target="_blank" title="Click here to view college information"><i class="fa fa-eye primary"></i></a>
                                                <a href="{{ route('college-edit',$record->id)}}" title="Click here to edit college content"><i class="fa fa-cog text-success"></i></a>
                                                 <a href="{{ route('college-edit-seo',$record->id)}}" title="Click here to edit seo informtion"><i class="fa fa-pencil text-warning"></i></a>
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