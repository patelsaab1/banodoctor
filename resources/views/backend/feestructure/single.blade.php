<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

              
                <div class="col-md-12 mt-2 ">
                    <h3> <a href="{{ route('fee-structure-view')}}" class="btn btn-primary bg-dark float-end" >View All </a>   <td><a href="{{ route('edit-fee-structure',$fee->id) }}" class="btn btn-success">Edit</a>
                    </h3>
                    <div class="card">
                        <div class="card-body">
                           




                                   <div class="mb-3 row">
                                  Title - 
                                       {{ $fee->table_name}}

                              
                                </div>

                                <div class="mb-3 row">
                                   
                                     <div class="col-4">

                                          Course - 

                                            
                                               
                                                {{ $fee->course }}
                                                   
                                            
                                        </div>
                                        
                                        
                                       
                                          <div class="col-4">

                                           Country - 

                                           
                                               {{ $fee->country}}
                                                
                                            
                                        </div>
                                        
                                        <div class="col-4">

                                          State -

                                           
                                                  {{ $fee->state }}
                                               
                                           

                                        </div>
                                </div>
                                
                                  <div class="mb-3 row">
                                   
                                        <div class="col-12">



                                           {!! $fee->table_post !!}

                                        </div>
                                </div>


                            
                             
                             
                                 
                                 
                                
                                
                                
                              
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </section>

  

</x-app-layout>