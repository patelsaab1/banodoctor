 
  <div class="contact_inner">
                <div class="contact_field">
  <h3  class="title-text">Contact Us</h3>

<form method="post" action="{{ route('contact-us')}}">
                    @csrf
                    
                   
            
            
                    <div class="row">
                        <div class="col-md-12 ">
                            



  
                            <div class="input-group mb-3">
                                
                                 <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                  
            
                                <input name="name" class="form-control input-field" placeholder="Enter Your Full Name"  required>
                                <span class="in-color-dark" asp-validation-for="CandidateName"></span>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                                  
                                <input name="email" class="form-control" placeholder="Enter Your Email ID"  required>
                                <span class="in-color-dark" asp-validation-for="CandidateEmail"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon3"><i class="fa fa-phone"></i></span>
                                <input name="phone" class="form-control" placeholder="Enter Your Mobile Number"  required>
                                <span class="in-color-dark" asp-validation-for="CandidatePhone"></span>
                            </div>
                        </div>
                        
                         <div id="CoursesSelectInput"></div>

                        <div class="col-md-12" id="selectCourseOptionHide">
                            <div class="input-group mb-3" >
                                  <span class="input-group-text" id="CoursesSelect"><i class="fa fa-check"></i></span>
                                <select name="course" class="form-control"   required="select Courses">
                                    
                                @foreach($category as $cat)
                                
                                <optgroup label="{{ $cat['category']->title }}">
                                     @foreach($cat['subcategory'] as $subcat)
                                <option>{{ $subcat->title }}</option>
                                     @endforeach
                                
                                </optgroup>
                                       @endforeach
                                </select>
                                
                                
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                  <span class="input-group-text mssge" id="basic-addon5"><i class="fa fa-comments"></i></span>
                                <textarea name="message" class="form-control" rows="5" placeholder="Write Your Message Here" ></textarea>
                                <span class="in-color-dark" asp-validation-for="Message"></span>
                            </div>


                        </div>

                        <div class="action-btn">

                            <button  type="submit" class="btn contact_form_submit"> Submit </button>
                           


                        </div>
                    </div>
                </form>
</div>
</div>

