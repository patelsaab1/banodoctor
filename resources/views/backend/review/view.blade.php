<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


     
    
            

                @if(session()->has('success'))
                <div class="col-md-12 mt-2">

                <div class="alert alert-success">{{ session()->get('success')}}</div>
</div>
                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of All Testimony Google Reviews<a href="{{ route('review')}}" class="btn btn-primary bg-dark float-end" >Add New </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                           
                                            <th scope="col">Name</th>
                                            
                                            <th scope="col">Rating</th>
                                       
                                           <th scope="col">Image</th>
                                           
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            <td><?=$i?></td>
                                            <td scope="row">
                                                <img src="{{ asset('review/'.$record->image)}}" width="50">
                                                
                                                {{ $record->name}}</td>
                                         
                                            
                                            
                                            <td>{{ $record->rating }}</td>
                                            <td>{!! $record->review !!}</td>
                                           
                                            <td>
                                                
                                               
                                               
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