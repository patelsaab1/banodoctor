<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Page Not Found | Bano Doctor Medical Admission Guidance</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="The page you requested was not found. Return to Bano Doctor for MBBS, MD/MS and MDS admission guidance.">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    <div class="top-header">


        <div class=" mb-3 top-header-box">
            <i class="fas fa-phone"></i> +91-7880109834
        </div>

        <div class=" mb-3 top-header-box">
            <i class="fas fa-envelope"></i> info@banodoctor.com
        </div>

        <div class=" mb-3 top-header-box">
            <i class="fas fa-home"></i> Office no 310 (Golden chember of comerce) Veera Desai Industrial Estate, Andheri West, Mumbai, Maharashtra 400102
        </div>
        <div class=" mb-3 top-header-box">
            <div class="social-media-links header-right">
                <!-- Facebook -->
                <a href="https://www.facebook.com/banodoctorofficials" role="button"><i class="fa-brands fa-facebook"></i></a>

                <!-- Twitter -->
                <a href="https://twitter.com/banodoctors" role="button"><i class="fa-brands fa-twitter"></i></a>

                <!-- Google -->
                <a href="https://g.co/kgs/PbJxcK" role="button"><i class="fa-brands fa-google"></i></a>


                <!-- Youtube -->
                <a href=" https://www.youtube.com/channel/UCyygkB2BZNCx3l3YHaKxMwQ" role="button"><i class="fa-brands fa-youtube"></i>
                </a>



                <!-- Instagram -->
                <a href="https://www.instagram.com/banodoctors/" role="button"><i class="fa-brands fa-instagram"></i></a>

                <!-- Linkedin -->
                <a href="https://www.linkedin.com/in/bano-doctor-47639a264/" role="button"><i class="fa-brands fa-linkedin-in"></i></a>



                <!-- tumblr -->
                <a href="https://www.linkedin.com/in/bano-doctor-47639a264/" role="button"><i class="fa-brands fa-tumblr"></i>

                </a>


            </div>
        </div>

    </div>
    </div>

    </div>



<div class="container m-5">
    
    <h5 class="text-danger">Oops No Page Found</h5>
    <a href="{{ url('/')}}" class="btn btn-primary">Go to Home Page </a>
</div>







    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>





</body>

</html>
