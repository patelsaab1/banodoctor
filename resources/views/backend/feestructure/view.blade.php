<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


  
            

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of Fee Structures<a href="{{ route('create-fee-structure')}}" class="btn btn-primary bg-dark float-end" >Add New </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fee Strucure of Courses</th>
                                            
                                            <th>Action</th>
                                            
                                            </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            
                                            <td>{{ $i }}</td>
                                            
                                            <td>
                                                
                                              {{ $record->table_name}}, State - {{ $record->state }}, Country -{{ $record->country }} 
                                            
                                            
                                        
                                           
                                          
                                           
                                           </td>
                                           
                                           <td><a href="{{ route('edit-fee-structure',$record->id) }}" class="btn btn-success">Edit</a>
                                           <a href="{{ route('table-view-fee-structure',$record->id) }}" class="btn btn-primary">View</a>
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