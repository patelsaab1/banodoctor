<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-6 mt-2 ">
                    <h3> Create Faq for page Post <a href="{{ route('faq-view')}}" class="btn btn-primary bg-dark float-end" >View All </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blog-add-faq',request()->page_id) }}" method="post" enctype="multipart/form-data">
                                @csrf


                            <input type="hidden" name="post_type" value="college">
                             <div class="col-md-6">
                                    <label for="inputIcon" class="col-form-label">Select Page</label>
                                        <div class="col-12">


<select class="form-control" name="page_id">
                                           @foreach($pageList as $p)
                                           
                                               
                                                <option value="{{ $p->id }}">{{ $p->title }}</option>
                                                
                                                
                                           
                                   
                                    
                                    @endforeach
                                    
                                    </select>

                                        </div>
                                </div>
                                

                                    
                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Write Question</label>
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="question" id="question" placeholder="Enter Post  Title ">

                                        </div>
                                </div>
                                
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Post Answer</label>
                                        <div class="col-12">



                                            <textarea  class="form-control ckeditor" name="answer" id="answer" ></textarea>

                                        </div>
                                </div>


                            
                              

                                
                                
                                
                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    
                       <table id="collegeList" class="table-responsive" width="100%">
                
                <thead>
                    <tr>
                       <th>FAQ's</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0;?>
                     @foreach($faqList as $f)
                     
                    <tr>
                        <td>
                             <a href="{{route('faq.post.update',$f->id)}}" target="_blank">Edit</a>
                            <hr>
   
                            <h5>Question- {{$f->question }}</h5>
                            
                             <p>Answer- {!! $f->answer !!}</p>
                            
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
                </div>





            </div>
        </div>
    </section>


</x-app-layout>