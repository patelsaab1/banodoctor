<!DOCTYPE html>
<html lang="en">

<head>
      <link rel="icon" href="{{ asset('assets/images/Bano-Doctor-Logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/Bano-Doctor-Logo.png') }}" type="image/x-icon">
    <title>BanoDoctor Admin Panel</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Animation css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animation/animate.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('css2.css')}}?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- wheather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/weather/weather-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/weather/weather-icons-wind.css') }}">

    <!--flag Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flag-icons-master/flag-icon.css') }}">

    <!-- tabler icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tabler-icons/tabler-icons.css') }}">

    <!-- prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/prism/prism.min.css') }}">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">

    <!-- glight css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/glightbox.min.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick-theme.css') }}">

    <!-- Data Table css-->
  
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- vector map css -->
  
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


</head>

<body>
    <div class="app-wrapper">

        <!--<div class="loader-wrapper">-->
        <!--    <div class="loader_16"></div>-->
        <!--</div>-->

        <!-- Menu Navigation starts -->
        @include('layouts.navigation')
        <!-- Menu Navigation ends -->
        <div class="app-content">
            <div class="">


                <!-- Header Section starts -->
                <header class="header-main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-4 d-flex align-items-center header-left p-0">
                                <span class="header-toggle me-3">
                                    <i class="ph ph-circles-four"></i>
                                </span>
                            </div>

                            <div class="col-6 col-sm-8 d-flex align-items-center justify-content-end header-right p-0">

                                <ul class="d-flex align-items-center">

                                 
                                
                                    <li class="header-profile">
                                        <a href="#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#profilecanvasRight" aria-controls="profilecanvasRight">
                                            <img src="{{ asset('assets/images/avtar/woman.jpg')}}" alt="avtar"
                                                class="b-r-10 h-35 w-35">
                                        </a>

                                        <div class="offcanvas offcanvas-end header-profile-canvas" tabindex="-1"
                                            id="profilecanvasRight" aria-labelledby="profilecanvasRight">
                                            <div class="offcanvas-body app-scroll">
                                                <ul class="">
                                                    <li>
                                              <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger"><i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out</button>
</form>

                                                       
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Header Section ends -->

                <!-- Body main section starts -->
                <main>
                    <div class="container-fluid">
                        {{ $slot }}


                        <!-- Rest of your HTML content -->
                        <!-- Rest of your HTML content -->
                    </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Simple bar js-->
    <script src="{{ asset('assets/vendor/simplebar/simplebar.js') }}"></script>

    <!-- phosphor js -->
    <script src="{{ asset('assets/vendor/phosphor/phosphor.js') }}"></script>



    <!-- App js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- CKEditor -->
    <script src="{{ asset('assets/dist/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>



    <script>
        function check(input) {
            var stringlength = input.length;
            if (stringlength > 60) {
                document.getElementById("show_string_lenght").style = "color:red;width:100%";
                document.getElementById("show_string_lenght").innerHTML = "Meta title length should be 50 - 60 characters. Current Length is-" + stringlength;
            } else if (stringlength >= 50 && stringlength <= 60) {
                document.getElementById("show_string_lenght").style = "color:green;height:10px;width:100%";
                document.getElementById("show_string_lenght").innerHTML = "Meta title length should be 50 - 60 characters. Current Length is-" + stringlength;
            } else {
                document.getElementById("show_string_lenght").innerHTML = "Meta title length should be 50 - 60 characters. Current Length is-" + stringlength;
            }
        }

        function check_description(input) {
            var stringlength = input.length;
            if (stringlength > 160) {
                document.getElementById("show_string_description_lenght").style = "color:red;width:100%";
                document.getElementById("show_string_description_lenght").innerHTML = "Description length should be 150 - 160 characters. Current Length is-" + stringlength;
            } else if (stringlength >= 150 && stringlength <= 160) {
                document.getElementById("show_string_description_lenght").style = "color:green;height:10px;width:100%";
                document.getElementById("show_string_description_lenght").innerHTML = "Description length should be 150 - 160 characters. Current Length is-" + stringlength;
            } else {
                document.getElementById("show_string_description_lenght").innerHTML = "Description length should be 150 - 160 characters. Current Length is-" + stringlength;
            }
        }
    </script>

    <script>
        function get_text(el) {
            ret = "";
            var length = el.childNodes.length;
            for (var i = 0; i < length; i++) {
                var node = el.childNodes[i];
                if (node.nodeType != 8) {
                    ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
                }
            }
            return ret;
        }
        var words = get_text(document.getElementById('content'));
        var counter = words.split(' ').length;
        document.getElementById('output').innerHTML = "Word Count -" + counter;
    </script>





<!-- Scripts -->

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        $('#recordTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>


<script>
$(document).ready(function () {
    // Remove any user-select: none on all elements
    $('*').css({
        '-webkit-user-select': 'text',
        '-moz-user-select': 'text',
        '-ms-user-select': 'text',
        'user-select': 'text'
    });
});
</script>




    @livewireScripts
    
    



</body>

</html>