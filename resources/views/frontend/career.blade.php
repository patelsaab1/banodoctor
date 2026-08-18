@extends('layouts.base')
@section('body')

<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1 class="text-white">Career</h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Career</li>
  </ol>
</nav>
  </div> 

</div>

</div>

</div>
</div>

<div class="section mt-5">
<div class="container pb-5 pt-5">
    
   <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
         
           
         
                <div class="col-xl-6">
                   <div class="card my-4">  
                  <div class="card-body p-md-5  card-registration">
                    <h2 class="mb-5 text-uppercase text-light text-center">Apply For Job </h2>
                    <form  enctype="multipart/form-data" method="post">
                        @csrf
                      <div class="form-group mt-4 text-light"><input type="text" id="user_name"  name="name" class="form-control" placeholder="Name" /></div>
                      <div class="form-group mt-4 text-light"><input type="email" id="user_email" name="email" class="form-control" placeholder="Email Address" /></div>
                      <div class="form-group mt-4 text-light"><input type="phone" id="user_password" name="mobile" class="form-control" placeholder="Mobile No." /></div>
                      <div class="form-group mt-4 text-light"><select class="form-select" name="graduation">
                          <option selected>Highest Education</option>
                          <option>12th</option>
                          <option>Graduation</option>
                          <option>Post Graduation</option>
                        </select></div>
                      <div class="form-group mt-4 text-light"><select class="form-select" aria-label="Default select example" name="work_experience">
                          <option selected>Work Experience</option>
                          <option>Fresher</option>
                          <option>Experienced</option>
                        </select></div>
                        
                          <div class="form-group mt-4 text-light"><select class="form-select" aria-label="Default select example" name="job_profile">
                          <option selected>Select Job Profile</option>
                          <option>Telecalling/Counsellor</option>
                          <option>Full-Stack Developer</option>
                        </select></div>
                        
                        
                   
                        <div class="form-group mt-4 text-center"><button  class="submit-btn p-2">Submit</button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</div>
</div>












@endSection()