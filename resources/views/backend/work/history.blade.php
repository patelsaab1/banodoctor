<x-app-layout>

    <section>
        <div class="container py-2">

          
            

           

                <div class="col-md-12 mt-2">
                    <h3> Work History </h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User ID</th>
                                            <th>Activity</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($result as $record )
                                        <?php $i++;
                                        

?> 


                                        <tr class="">
                                            <td><?=$i?></td>
                                            
                                             
                                             
                                             
                                          
                                              
                                              
                                            
                                            <td scope="row">{{ $record->user_id}}
                                          
                                            
                                          
                                            
                                           
                                            </td>
                                         
                                          
                                           
                                           
                                            <td>
                                               {{ $record->action_activity}}

                                            </td>
                                            
                                             <td>{{date('d-m-Y H:i a',strtotime($record->updated_at))}}</td>
                                             
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