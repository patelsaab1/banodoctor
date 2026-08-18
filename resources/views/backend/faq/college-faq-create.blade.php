<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-12 mt-2 ">
                    <h3> Create Faq for page Post <a href="{{ route('faq-view')}}" class="btn btn-primary bg-dark float-end" >View All </a></h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('college-faq-create',request()->page_id) }}" method="post" enctype="multipart/form-data">
                                @csrf


                            <input type="hidden" name="post_type" value="college">
                             <div class="col-md-12 ">
                                    <label for="inputIcon" class="col-form-label">Select Page</label>
                                        


<select class="form-control" name="page_id">
                                           @foreach($pageList as $p)
                                           
                                               
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                
                                                
                                           
                                   
                                    
                                    @endforeach
                                    
                                    </select>

                                       
                                </div>
                                

                                    
                               <div id="faqContainer">
                                    <!-- First FAQ Item -->
                                    <div class="faq-item mb-4 border p-3">
                                        <div class="mb-3 row">
                                            <label class="col-form-label">Question</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="faqs[0][question]" placeholder="Enter Question">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label class="col-form-label">Answer</label>
                                            <div class="col-12">
                                                <textarea class="form-control ckeditor" name="faqs[0][answer]"></textarea>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-danger btn-sm remove-faq" style="display: none;">Remove</button>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <button type="button" id="addMoreFaq" class="btn btn-secondary">Add More FAQ</button>
                                </div>
                                
                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button type="submit" class="bg-dark btn btn-primary">Save All FAQs</button>
                                    </div>
                                </div>


                            
                              

                                
                                
                                
                             
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    
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
                        
                        <td><a href="{{route('faq.post.update',$f->id)}}" target="_blank">Edit</a> <a href="{{route('faq.post.delete',$f->id)}}"  class="text-danger">Delete</a>
                            <hr>
   

          
       Question - {{$f->question}}
       <br>
      
       Answer {!! $f->answer!!}
   
        
        
       
                            <hr>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
                </div>





            </div>
        </div>
    </section>
    
    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let faqCount = 1;
            
            // Add more FAQ
            $('#addMoreFaq').click(function() {
                let newFaq = `
                    <div class="faq-item mb-4 border p-3">
                        <div class="mb-3 row">
                            <label class="col-form-label">Question</label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="faqs[${faqCount}][question]" placeholder="Enter Question">
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label class="col-form-label">Answer</label>
                            <div class="col-12">
                                <textarea class="form-control ckeditor" name="faqs[${faqCount}][answer]"></textarea>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-danger btn-sm remove-faq">Remove</button>
                    </div>
                `;
                
                $('#faqContainer').append(newFaq);
                faqCount++;
                
                // Initialize CKEditor for new textarea
                if (typeof CKEDITOR !== 'undefined') {
                    CKEDITOR.replace(`faqs[${faqCount-1}][answer]`);
                }
                
                // Show remove button on all items except first
                $('.remove-faq').show();
            });
            
            // Remove FAQ
            $(document).on('click', '.remove-faq', function() {
                $(this).closest('.faq-item').remove();
                faqCount--;
                
                // Hide remove button if only one FAQ remains
                if ($('.faq-item').length <= 1) {
                    $('.remove-faq').hide();
                }
            });
            
            // Initially hide remove button for first FAQ
            $('.remove-faq').hide();
        });
    </script>

</x-app-layout>