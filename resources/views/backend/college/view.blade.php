<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


        
            

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif


                <div class="col-md-12 mt-2">
                    <h3> List of All College <a href="{{ route('college')}}" class="btn btn-primary bg-dark float-end" >Add New </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date Last Updated</th>
                                            <th>Web Image</th>
                                            <th>Card Image</th>
                                            <th>Hero SectionImage</th>
                                            
                                            
                                            <th scope="col">College Name</th>
                                            
                                             
                                           
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($records as $record )
                                        <?php $i++;
                                        

?> 


                                        <tr class="">
                                            <td><?=$i?></td>
                                             <td>
  {{ $record->updated_at ? $record->updated_at->format('d-m-Y') : '' }}
</td>
  
                                             
                                             
                                             
                                            <td scope="col">
                                                <img src="{{asset('college/'.$record->image)}}" height="50" width="50"></td>
                                             <td scope="col"><img src="{{asset('college/'.$record->card_image)}}" height="50" width="50"></td>
                                              <td scope="col"><img src="{{asset('college/'.$record->hero_section_image)}}" height="50" width="50"></td>
                                              
                                              
                                              
                                              
                                              
                                              
                                            
                                            <td scope="row">{{ $record->name}}
                                                <hr>
                                            {{ $record->address }} <hr> {{ $record->city }} | {{ $record->state}} | {{ $record->country }}
                                            
                                            
                                            
                                          
                                            
                                           
                                            </td>
                                         
                                          
                                           
                                           
                                            <td>
                                                @if(!empty($record->youtube_video_embed))
                                                <strong class="text-success">Video Uploaded</strong>
                                                @else
                                                <strong class="text-danger">Pending For Uploade</strong>
                                                @endif
                                               
                                                <hr>
                                                
                                                 <a href="{{ url('/college/'.$record->slug )}}" target="_blank" title="Click here to view college information"> Slug - {{ url('/college/'.$record->slug )}} </a>
                                                 
                                                  <hr>
                                                  <a href="{{ route('college-faq-create',$record->id) }}">Add/View Faq({{$record->faqCount}})</a>
                                                 <hr>
                                               
                                                
                                               
                                                 <a href="{{ route('college-edit',$record->id)}}" title="Click here to edit college content"><i class="fa fa-cog text-success"></i> Update College </a>
                                                 <a href="{{ route('college-edit-seo',$record->id)}}" title="Click here to edit seo informtion"><i class="fa fa-pencil text-warning"></i> Update SEO </a>
                                               

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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country').on('change', function () {
                var Country = this.value;
                $("#state").html('');
                $.ajax({
                    url: "{{route('get-state-list')}}",
                    type: "POST",
                    data: {
                        country: Country,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                        
                    }
                });
            });
            
        });
        </script>
</x-app-layout>