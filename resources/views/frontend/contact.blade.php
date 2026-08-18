@extends('layouts.base')
@section('body')

<div class="page-hero-section">
<div class="container-fluid page-section-overlay">

<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">
 
 <div class="page-banner">      
 
 <h1>Contact Us </h1>
 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
  </div> 

</div>

</div>

</div>
</div>


<div class="section mb-7 conatct_us mt-5">

    <div class="container">
        
        
        <div class="row  ">
            
            <div class="col-lg-7 col-md-6 px-0 first" >
                
                <div class="contact_inner">
                <div class="contact_field">
  
                <!-- <h2  class="title-text">Get in touch if have any query</h2> -->
               @include('layouts.contactus')
            </div></div></div>
            <div class="col-lg-5 col-md-6 col-sm-12 cont px-0 second">


<div class="contact_info_sec contact_info_sec_sec text-white">
    <h4>Contact Info</h4>
    <!--<div class="d-flex  info_single align-items-center">-->
    <!--    <i class="fas fa-headset"></i>-->
    <!--    <span>+91-7880109834</span>-->
    <!--</div>-->
    <!--<div class="info_single"> <i class="fas fa-headset icon"></i>-->
    <!--    <span>+91 7880109839</span>-->
    <!--</div>-->
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-envelope-open-text"></i>
        <span>support@banodoctor.com</span>
    </div>
    <div class="info_single"><i class="fas fa-envelope-open-text"></i>
        <span>info@banodoctor.com</span>
    </div>
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-map-marked-alt"></i>
        <span>
           Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 452010 </span>

    </div>
    
    
     <div class="d-flex info_single align-items-center">
        <i class="fas fa-map-marked-alt"></i>
        <span>
            
            Ground Floor,
Shop No. 114,
Shopprix Mall,
Sector 5,
Vaishali,
Ghaziabad,
District: Ghaziabad,
Uttar Pradesh – 201010
           
           </span>

    </div>
    
    

</div>
</div>
        </div>
    
    



</div>


</div>

<!--- End Of Contact Section -->


<!-- Map Location Section Start-->


<div class="section mt-10">
<div class="container-fluid">

<div class="row">
    
    
    
    
    


<div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.452401910052!2d75.89466597358572!3d22.748586226500496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd017f4c10db%3A0x46eab79a78b02055!2sKrishna%20business%20centre!5e0!3m2!1sen!2sin!4v1752148371986!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>

<!-- Map Location End-->





@endSection()