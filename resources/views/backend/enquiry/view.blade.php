<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">








                <div class="col-md-12 mt-2">
                    <h3> List of Enquiries</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                             <th scope="col">Date</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Name</th>


                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            
                                            <th scope="col">Message</th>
                                            
                                              <th scope="col">neet_score</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $i=0; ?>
                                        @foreach($records as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                             <td>{{ $i }}</td>
                                              <td>{{ $record->created_at }}</td>
                                            <td scope="row">{{ $record->course}}</td>
                                            <td scope="row">{{ $record->name}}</td>
                                            <td><a href="mailto:{{ $record->email }}">{{ $record->email }}</a></td>
                                           
                                            <td><a href="tel:{{ $record->phone }}">{{ $record->phone }}</a></td>
                                            
                                             
                                            <td>{{ $record->message }}</td>

                                            <td scope="row">{{ $record->neet_score}}</td>
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