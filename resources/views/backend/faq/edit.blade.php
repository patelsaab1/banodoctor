 
 <x-app-layout>
     
     
     
       <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">
                
                
      <form action="{{ route('faq.post.update',$f->id) }}" method="post">
        @csrf
        
        <input type="hidden" name="faqid" value="{{$f->id}}">

          <div class="form-group">
        <input type="text" id="question" name="question" class="form-control" placeholder="Enter Question Here" value="{{$f->question}}">
        <textarea type="text" id="answer" name="answer" class="form-control ckeditor" placeholder="Enter FAQ Answer Here">{{$f->answer}}</textarea>
    </div>
        
        
        <button class="btn btn-success delete-row">Update</button>

    </form>
    </div>
    </div>
    </section>
    
 </x-app-layout>
