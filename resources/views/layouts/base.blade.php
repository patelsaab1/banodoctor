<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11224288391"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11224288391');
    </script>

    <!-- extrea -->
    <!-- Event snippet for Visitors In Website conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-11224288391/HbFwCOiE7OAYEIeZlOgp'
        });
    </script>
    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11557323456">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11557323456');
</script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-53DT3VFP');
    </script>
    <!-- End Google Tag Manager -->




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $fallbackTitle = 'Bano Doctor – MBBS, MD/MS and MDS Admission Guidance';
        $pageLabel = trim((string) (
            data_get($page ?? null, 'title')
            ?: data_get($page ?? null, 'page_title')
            ?: data_get($college ?? null, 'name')
            ?: data_get($blog ?? null, 'title')
            ?: data_get($news ?? null, 'title')
            ?: ''
        ));
        $seoTitle = trim((string) (
            data_get($seo_meta_title ?? null, 'seo_meta_title')
            ?: data_get($page ?? null, 'seo_meta_title')
            ?: data_get($college ?? null, 'seo_meta_title')
            ?: data_get($blog ?? null, 'seo_meta_title')
            ?: data_get($news ?? null, 'seo_meta_title')
            ?: ''
        ));
        if ($seoTitle === '') {
            $seoTitle = $pageLabel !== '' ? $pageLabel.' | Bano Doctor Medical Admission Guidance' : $fallbackTitle;
        } elseif (mb_strlen($seoTitle) < 30) {
            $seoTitle .= ' | Bano Doctor Medical Admission Guidance';
        }

        $seoDescription = trim((string) (
            data_get($seo_meta_description ?? null, 'seo_meta_description')
            ?: data_get($page ?? null, 'seo_meta_description')
            ?: data_get($college ?? null, 'seo_meta_description')
            ?: data_get($blog ?? null, 'seo_meta_description')
            ?: data_get($news ?? null, 'seo_meta_description')
            ?: 'Bano Doctor helps students with MBBS, MD/MS and MDS admissions, college fees, cutoffs and counselling in India.'
        ));
        $seoKeywords = trim((string) (
            data_get($seo_meta_keywords ?? null, 'seo_meta_keywords')
            ?: data_get($page ?? null, 'seo_meta_keywords')
            ?: 'MBBS, MD, MS, MDS, NEET, medical colleges, Bano Doctor'
        ));
        $canonicalUrl = data_get($canonical_link ?? null, 'canonical_link');
        if (! is_string($canonicalUrl) || $canonicalUrl === '') {
            $canonicalUrl = url()->current();
        }
    @endphp

    <title>{{ $seoTitle }}</title>
    <meta name="p:domain_verify" content="89d76f581e1dc6f7cc37f72a9e1239ee"/>

    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">




    <link rel="canonical" href="{{ $canonicalUrl }}" />


    <meta name="robots" content="index,follow" />


    <meta name="author" content="Bano Doctor">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Bano Doctor Top Medical Consultant" />
    <meta name="twitter:creator" content="BanoDoctor" />
    <meta property="og:url" content="{{ $canonicalUrl }}" />



    <meta property="og:title" content="{{ $seoTitle }}" />
    <meta property="og:description" content="{{ $seoDescription }}" />






    <meta name="google-site-verification" content="ZHbd25HdH7_zO1Q7mHA3V17xd1ZgrUtvEU4mJxr9494" />



    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/social-icons.css') }}" rel="stylesheet">


    <script src="{{ asset('assets/dist/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>


    <!-- Basic stylesheet -->
    <link rel="stylesheet"
        href="{{ asset('Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.css') }}">


    <!-- Default Theme -->
    <link rel="stylesheet"
        href="{{ asset('Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.theme.css') }}">


    <script src="{{ asset('assets/dist/js/slick.js') }}"></script>
    <link href="{{ asset('assets/dist/css/megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/searchbar.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-260231334-1"></script>
    <script src="{{ asset('assets/dist/js/megamenuscript.js') }}"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-260231334-1');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '648433170500073');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1"
            src="https://www.facebook.com/tr?id=648433170500073&ev=PageView&noscript=1"
            alt="Bano Doctor Medical College" class="bano-fb" /></noscript>
    <!-- End Meta Pixel Code -->
    <link href="{{ asset('assets/dist/css/chat.css') }}" rel="stylesheet">

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                autoDisplay: false,
                includedLanguages: 'be,bn,bho,zh,en,gu,hi,ml,mr,or,pa,ro,ru,tl',
                gaTrack: true,
                gaId: 'AIzaSyDQMlOYhFy8Q_jogyUQEuM9RjpHpHeLfQw'
            }, 'google_translate_element');
        }
    </script>




    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '797525368594397');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=797525368594397&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

    <?php
    
    if (!empty($script)) {
        echo $script;
    }
    ?>

    @livewireStyles


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Bano Doctor Education Consultancy",
  "image": "https://www.banodoctor.com/Bano-Doctor-Logo.png",
  "url": "https://www.banodoctor.com/",
  "telephone": "+917880109834",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
   "addressLocality": "Indore ",
    "addressRegion": "FL",
    "streetAddress": "Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 452010",
    "postalCode": "452010",
    "addressCountry": "IN",
    "addressRegion": "FL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 22.749283178247797,
    "longitude": 75.89731578465661
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "10:00",
    "closes": "18:00"
  },
  "description": "Bano Doctor is a medical admission consultancy that works in the sector of medical admission. We are dedicated to providing our clients with professional and reliable service for their medical admission needs. We offer comprehensive services for MD MS admission, MBBS admission, BAMS admission, and BDS admission,bnys admission ,bums admission ,bvsc admission ,bhms admission ,dm mch admission ,cps fcps admission ,nursing admission.",
  "name": "BanoDoctor",
  "telephone": "+917880109834",
    "sameAs": [
    "https://www.facebook.com/banodoctorsofficial/",
    "https://x.com/banodoctors",
    "https://www.instagram.com/banodoctors/",
    "https://www.youtube.com/channel/UCyygkB2BZNCx3l3YHaKxMwQ",
    "https://www.linkedin.com/in/bano-doctor-47639a264/"
  ]
}
</script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1220009629760764');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1220009629760764&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
 <link rel="stylesheet" href="{{asset('css/custom.css')}}">
 

 



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZKCRQHHJ0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZKCRQHHJ0');
</script>




 @if (Route::is('single-college'))
        <link rel="stylesheet" href="{{ asset('assets/css/college.css') }}">
    @endif
    
    
     @if (Route::is('single-page'))
        <link rel="stylesheet" href="{{ asset('assets/css/college.css') }}">
    @endif
    
    
    
    
        
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZKCRQHHJ0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZKCRQHHJ0');
</script>
    
    
    
    <!-- Event snippet for website conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-17403277497/u7VqCP3X1PwaELnhw-pA',
      'value': 0.0,
      'currency': 'INR'
  });
</script>
    <!-- Event snippet for website conversion page -->
<script>
fbq('track', 'ViewContent', {
  content_ids: ['123'], // 'REQUIRED': array of product IDs
  content_type: 'product', // RECOMMENDED: Either product or product_group based on the content_ids or contents being passed.
});

</script>

</head>

<body>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11224288391"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11224288391');
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53DT3VFP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section>
        
        
     
        

        <div class="container-fluid top-header">


            <div class=" mb-3 top-header-box">
                <div id="google_translate_element"></div>
            </div>
            <div class=" mb-3 top-header-box">
                <a href="tel:+917880109834"> <i class="fas fa-phone"></i> +91-7880109834 </a>
            </div>

            <div class=" mb-3 top-header-box">
                <a href="mailto: "><i class="fas fa-envelope"></i> info@banodoctor.com</a>
            </div>



            <div class=" mb-3 top-header-box">
                <i class="fas fa-home"></i> Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 452010
            </div>




        </div>
         <!--marquee notification -->

        <marquee direction="left" behavior="scroll" scrollamount="7" onmouseover="this.stop()" onmouseout="this.start()"
            class="header-notification">
            <div class="t-div">
                @foreach ($all_news as $n)
                    <a class="hyper-news-link m-2" href="{{ url('news/' . $n->slug) }}"
                        aria-label="{{ $n->title }}">
                        {{ $n->title }}

                    </a>
                @endforeach
            </div>
        </marquee>
         <!--marquee notification -->

        <header class="header_area header-background">
            <div class="main_header_area animated">

                <nav id="navigation1" class="navigation">
                    <div class="nav-header">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('Bano-Doctor-Logo.png') }}"
                                    class="header-logo-custom-size" alt="Bano Doctor - Top Medical Consultant"></a>
                        </div>


                        <div class="nav-toggle"></div>

                    </div>
                    <div class="nav-search">
                        <div class="nav-search-button"><i class="nav-search-icon text-primary"></i></div>
                        <form>
                            <div class="nav-search-inner">
                                <input id="searchbar" onkeyup="search_colleges()" type="text" name="search"
                                    placeholder="Search colleges, Notifications & Latest Blog Post ..">

                                <div class="college-list-all">

                                    <ul id='list'>

                                        @foreach ($collegeList as $college)
                                            <li class="colleges" id="element-id-{{ $college->id }}">
                                                <a href="{{ url('college/' . $college->slug) }}"
                                                    area-label="{{ $college->slug }}" id="{{ $college->id }}">
                                                    <div id="list-college-element{{ $college->id }}">

                                                        <p>{{ $college->name }}</p>
                                                        <p>{{ $college->city }} {{ $college->state }}
                                                            {{ $college->Country }}</p>

                                                    </div>

                                                </a>

                                            </li>
                                        @endforeach


                                        @foreach ($all_news as $college)
                                            <li class="colleges" id="element-id-{{ $college->id }}">
                                                <a href="{{ url('news/' . $college->slug) }}"
                                                    area-label="{{ $college->slug }}" id="{{ $college->id }}">
                                                    <div id="list-college-element{{ $college->id }}">

                                                        <p>{{ $college->title }}</p>


                                                    </div>

                                                </a>

                                            </li>
                                        @endforeach

                                        @foreach ($blogs as $college)
                                            <li class="colleges" id="element-id-{{ $college->id }}">
                                                <a href="{{ route('single-blog', $college->slug) }}"
                                                    area-label="{{ $college->slug }}" id="{{ $college->id }}">
                                                    <div id="list-college-element{{ $college->id }}">

                                                        <p>{{ $college->title }}</p>


                                                    </div>

                                                </a>

                                            </li>
                                        @endforeach




                                    </ul>
                                </div>

                            </div>
                        </form>


                    </div>
                    <div class="nav-menus-wrapper">
                        <a href="{{ url('/') }}" id="mobile-logo"><img
                                src="{{ asset('Bano-Doctor-Logo.png') }}" class="mobile-logo header-logo-custom-size"
                                id="mobile-logo-image" alt="Top Medical Counsultancy"></a>
                        <ul class="nav-menu align-to-right">
                            {!! $menu !!}
                        </ul>
                    </div>
                </nav>

            </div>
        </header>

    </section>
    
    
    
     
       
       
       

    @yield('body')

    <div class="section mt-5 mb-5 ">

        @if (!request()->routeIs('blog-list'))

            <div class="wrapper">
                <div class="container">
                    <h3>Latest Blog Post</h3>
                    <div class="tagline-style"></div>

                    <div class="inner-wrapper">
                        @foreach ($blogs as $post)
                            <div class="card">
                                <div class="inner-card">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('blog/' . $post->image) }}" alt="{{ $post->title }}">
                                    </div>

                                    <div class="btn-wrapper">
                                        <a href="{{ route('single-blog', $post->slug) }}"
                                            class="news-title-custom">{{ $post->title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        @endif





    </div>

    <!--end of Blog  section -->



    @if (!request()->routeIs('all-news'))
        @include('layouts.news-section')
    @endif




    <!-- Footer -->





    <footer class="text-lg-start text-muted ">

        <!-- Section: Links  -->
        <section class="footer-section">
            <div class="container">
                <!-- follow us google -->

                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->

                    <!-- Grid column -->
                    {!! $footermenu !!}


                </div>
                <div class="row footer-about-box mt-3">
                    <div class="col-lg-4 col-xl-4 ">
                        <!-- Content -->


                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('Bano-Doctor-Logo.png') }}"
                                    alt="Bano Doctor Best Medical Counsultancy" class="bano-logo-dr">
                            </div>
                            <div class="col"> <img src="{{ asset('independence-bno-doctor.png') }}"
                                    alt="Best medical College Bano Doctor" class="bano-independence"> </div>


                        </div>


                        <div class="contact-address-info mb-3">

                            <div class="icon-box">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </div>

                            <div class="info-box-footer">


                               Office No-223,2nd Floor, 683/3, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 452010
                               <hr>
                                  
            Ground Floor,
Shop No. 114,
Shopprix Mall,
Sector 5,
Vaishali,
Ghaziabad,
District: Ghaziabad,
Uttar Pradesh – 201010

                            </div>
                            
                            
                            

                        </div>


                        <div class="contact-address-info mb-3">

                            <div class="icon-box">
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                            </div>

                            <div class="info-box-footer">
                                info@banodoctor.com
                            </div>

                        </div>

                        <div class="contact-address-info mb-3">


                            <div class="icon-box">
                                <i class="fas fa-phone" aria-hidden="true"></i> 
                            </div>

                            <div class="info-box-footer-footer">
                               <a href="to:+917880109834" >+917880109834</a>
                            </div>

                        </div>






                        <div class="social-media-links">


                            <!--Whats App Icon -->

                            <a href="https://wa.link/f2hyjr" role="button" aria-label="Facebook"><i
                                    class="fa-brands fa-whatsapp"></i></a>

                            <!--End of Whats App Icon-->

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/banodoctorsofficial/" role="button"
                                aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>

                            <!-- Twitter -->
                            <a href="https://twitter.com/banodoctors" role="button" aria-label="Twitter"><i
                                    class="fa-brands fa-twitter"></i></a>

                            <!-- Google -->
                            <a href="https://www.google.com/localservices/prolist?spp=Cg0vZy8xMXRzanhfX244&scp=CgAaIUJhbm8gRG9jdG9yIEVkdWNhdGlvbiBDb25zdWx0YW5jeSohQmFubyBEb2N0b3IgRWR1Y2F0aW9uIENvbnN1bHRhbmN5&q=Bano+Doctor+Education+Consultancy&src=2&slp=UhUIARIREg8iDS9nLzExdHNqeF9fbjg"
                                role="button" aria-label="Google"><i class="fa-brands fa-google"></i></a>


                            <!-- Youtube -->
                            <a href=" https://www.youtube.com/channel/UCyygkB2BZNCx3l3YHaKxMwQ" aria-label="Youtube"
                                role="button"><i class="fa-brands fa-youtube"></i>
                            </a>



                            <!-- Instagram -->
                            <a href="https://www.instagram.com/banodoctors/" role="button" aria-label="Instagram"><i
                                    class="fa-brands fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a href="https://www.linkedin.com/in/bano-doctor-47639a264/" aria-label="LinkedIn"
                                role="button"><i class="fa-brands fa-linkedin-in"></i></a>



                            <!-- tumblr -->
                            <a href="https://www.tumblr.com/banodoctor" aria-label="Tumblr" role="button"><i
                                    class="fa-brands fa-tumblr"></i>

                            </a>

                            <a href="https://news.google.com/search?q=banodoctor&hl=en-IN&gl=IN&ceid=IN%3Aen"
                                aria-label="googlenews" role="button" class="d-flex align-items-center">
                                <p class="text-white mb-0 ps-2">Follow us on Googlenews :</p><img
                                    src="{{ asset('assets/images/gnews.png') }}" alt="Google News - Bano Doctor"
                                    class="gnews_footer">
                            </a>

                            </a>


                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-8 ">
                        <h5 class="text-white">Bano Doctor - Top Medical Admission Consultant</h5>

                        <p class="info-box-footer"> Bano Doctor is a medical admission consultancy that works in the
                            sector of medical admission. We are dedicated to providing our clients with professional and
                            reliable service for their medical admission needs. We offer comprehensive services for MD
                            MS admission, MBBS admission, BAMS admission, and BDS admission,bnys admission ,bums
                            admission ,bvsc admission ,bhms admission ,dm mch admission ,cps fcps admission ,nursing
                            admission .</p>

                        <p class="info-box-footer">At Bano Doctor, we understand the complexities of the medical
                            admission process and strive to make it as stress free as possible for our clients. Our team
                            of highly qualified and experienced professionals provide personalized services for each
                            client’s individual needs. We have an extensive network of contacts in the medical field in
                            order to ensure that our clients get the best possible advice and assistance.</p>
                    </div>
                </div>
                <!-- Grid row -->
            </div>
        </section>


        <!-- Grid container -->


        <!-- Copyright -->
        <div class="text-center copyright-bottom">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://banodoctor.com/">All Rights Reserved</a> | <a
                href="https://banodoctor.com/privacy-policy" class="text-danger">Privacy & Policy </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    @if (session()->has('success'))
        <div id="showMessage">

            <div class="alert alert-success text-center">{!! session()->get('success') !!} </div>


        </div>
    @endif




<!-- Sticky Buttons -->
<div class="sticky-buttons">
   <button id="contactBtn" class="enquiry-btn">✉️ Send Enquiry</button>
   <a href="tel:+917880109834" class="call-btn"><i class="fa fa-phone text-white" ></i>
  Call Now</a>
   <a href="https://wa.me/917880109834" target="_blank" class="whatsapp-btn">💬 WhatsApp</a>
</div>

<!-- Collapsible Enquiry Form -->
<div id="contactForm" class="contact-form-wrapper">
    <div class="contact-form-header">
        <h6 class="text-white">Send Enquiry</h6>
        <button id="closeForm" class="close-btn">&times;</button>
    </div>
    <div class="contact-form-body">
        <div class="col-md-12">
            @include('layouts.contactus')
        </div>
    </div>
</div>



    <div class="section1 hide-mobile">


        <div class="sticky-social">
          
            <ul class="social">




                <!--Whats App Icon -->

           
                <!--End of Whats App Icon-->

                <!-- Facebook -->
                <li class="fb"><a href="https://www.facebook.com/banodoctorsofficial/" role="button"
                        aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a></li>

                <!-- Twitter -->
                <li class="fb"><a href="https://twitter.com/banodoctors" role="button" aria-label="Twitter"><i
                            class="fa-brands fa-twitter"></i></a></li>

                <!-- Google -->
                <li class="fb"><a
                        href="https://www.google.com/localservices/prolist?spp=Cg0vZy8xMXRzanhfX244&scp=CgAaIUJhbm8gRG9jdG9yIEVkdWNhdGlvbiBDb25zdWx0YW5jeSohQmFubyBEb2N0b3IgRWR1Y2F0aW9uIENvbnN1bHRhbmN5&q=Bano+Doctor+Education+Consultancy&src=2&slp=UhUIARIREg8iDS9nLzExdHNqeF9fbjg"
                        role="button" aria-label="Google"><i class="fa-brands fa-google"></i></a></li>


                <!-- Youtube -->
                <li class="fb"><a href=" https://www.youtube.com/channel/UCyygkB2BZNCx3l3YHaKxMwQ"
                        aria-label="Youtube" role="button"><i class="fa-brands fa-youtube"></i></li>
                </a>



                <!-- Instagram -->
                <li class="fb"><a href="https://www.instagram.com/banodoctors/" role="button"
                        aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>

                <!-- Linkedin -->
                <li class="fb"><a href="https://www.linkedin.com/in/bano-doctor-47639a264/" aria-label="LinkedIn"
                        role="button"><i class="fa-brands fa-linkedin-in"></i></a></li>



                <!-- tumblr -->
                <li class="fb"><a href="https://www.tumblr.com/banodoctor" aria-label="Tumblr" role="button"><i
                            class="fa-brands fa-tumblr"></i>

                    </a></li>

                <li class="fb"> <a href="https://news.google.com/search?q=banodoctor&hl=en-IN&gl=IN&ceid=IN%3Aen"
                        aria-label="googlenews" role="button"><img src="{{ asset('Bano-Doctor-Logo.png') }}"
                            class="gnews" alt="Bano Doctor Google News" loading="lazy"></a></li>





            </ul>
        </div>
    </div>



    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.js') }}">
    </script>

    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
    <script src="{{ asset('js/response.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>

    <script>
        // vars
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>

    <script>
        var i;

        var s = document.getElementsByTagName('span');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('p');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('table');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }


        var s = document.getElementsByTagName('h1');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }
        var s = document.getElementsByTagName('h2');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }
        var s = document.getElementsByTagName('h3');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('h4');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('h5');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('h6');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('tr');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }

        var s = document.getElementsByTagName('td');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");
        }


        var s = document.getElementsByTagName('ul');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");




        }


        var s = document.getElementsByTagName('li');
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("style");


        }

        var s = document.getElementsByTagName('body');

        s[0].removeAttribute("style");
    </script>


    <script>
        $('table').wrap('<div class="tb-responsive-container"></div>');
    </script>


    <script>
        var s = document.querySelectorAll("[id^='faqCollapse']");
        for (i = 0; i < s.length; i++) {
            s[i].removeAttribute("class", "collapse");


        }
    </script>
    <script>
        function search_colleges() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("searchbar");
            filter = input.value.toUpperCase();
            ul = document.getElementById("list");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>

    <script>
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {})
        myModal.show()
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    @livewireScripts


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('#searchCollegeLive').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
                type: 'post',
                url: '{{ route('live.search.colleges') }}',
                data: {

                    _token: "{{ csrf_token() }}",
                    'search': $value
                },
                success: function(data) {
                    $('#collegesSection').html(data);
                }
            });
        })
    </script>

    <div class="modal fade" id="openModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Your Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registrationForm" method="POST" action="">
                       
                        <div id="message-alert-show-error"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="mobile">Mobile:</label>
                            </div>
                            <div class="col-md-5">
                                <input type="number" id="mobile" name="mobile" required>
                            </div>
                            <div class="col-md-4">
                                <button type="button" onclick="sendOTP()" class="btn btn-secondary">Send OTP</button>
                            </div>
                        </div>
                        
                        <div id="otpContainer">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="otp">OTP:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" id="otp" name="otp" required>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" onclick="verifyOTP()" class="btn btn-success">Verify OTP</button>
                                </div>
                            </div>
                        </div>
                        <div id="registrationFields">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fullName">Full Name:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="fullName" name="fullName" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="neetScore">NEET Score:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="neetScore" name="neetScore" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function sendOTP() {
            const mobile = $("#mobile").val();
    
            if (mobile.length !== 10) {

                $("#message-alert-show-error").addClass("text-danger");
                $("#message-alert-show-error").html("Invalid mobile number. Please enter a valid number.");
                
                return;
            }
    
            $.ajax({
                url: "{{ route('send_otp') }}",
                type: "POST",
                data: {
                    mobile: mobile,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        $("#otpContainer").show();
                        $("#message-alert-show-error").addClass("text-success");
                        $("#message-alert-show-error").html("Verify your otp has been sent to your mobile number");

                    } else {
                        $("#message-alert-show-error").addClass("text-danger");
                        $("#message-alert-show-error").html("Please enter valid mobile number");
                        
                    }
                }
            });
        }
    
        function verifyOTP() {
            const otp = $("#otp").val();
            const mobile = $("#mobile").val();
    
            if (otp.length !== 6 || isNaN(otp)) {

                $("#message-alert-show-error").addClass("text-danger");
                $("#message-alert-show-error").html("Invalid OTP! Please enter 6-digit number.");
                
                return;
            }
    
            $.ajax({
                url: "{{ route('verify_otp') }}",
                type: "POST",
                data: {
                    mobile: mobile,
                    otp: otp,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        $("#registrationFields").show();
                        $("#message-alert-show-error").addClass("text-success");
                        
                        $("#message-alert-show-error").html("Otp has been verified, enter your name and neet score!");
                    } else {
                        // alert("Invalid OTP! Please try again.");
                        $("#message-alert-show-error").html("Invalid OTP! Please try again.");
                    }
                }
            });
        }
    
        function submitForm() {
            const fullName = $("#fullName").val();
            const mobile = $("#mobile").val();
            const neetScore = $("#neetScore").val();
    
            $.ajax({
                url: "{{ route('view_cutoff') }}",
                type: "POST",
                data: {
                    mobile: mobile,
                    fullName: fullName,
                    neetScore: neetScore,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {

                        $("#message-alert-show-error").addClass("text-success");
                        $("table").removeClass("cut-off-presentaction-table");
                       
                        
                        $("#message-alert-show-error").html("Your information has been submitted.");

                      
                        $("#openModal").modal('hide');
                    } else {

                        $("#message-alert-show-error").addClass("text-danger");
                        
                        $("#message-alert-show-error").html("Having some error! Please try again.");

                       
                    }
                }
            });
        }
    </script>
    

<script>
$(document).ready(function () {
    $('[class*="downloadFileSection_url_"]').each(function () {
        // Get full class list
        var classList = $(this).attr('class').split(/\s+/);
        
        // Loop through classes to find the one starting with 'downloadFileSection_url_'
        classList.forEach(className => {
            if (className.startsWith('downloadFileSection_url_')) {
                var fileName = className.replace('downloadFileSection_url_', '');

                // Build button
                var fileUrl =fileName; // or use your file path logic
                var button = $('<button>', {
                    text: 'Click Here to Download',
                    class: 'btn btn-success download-btn',
                    id: 'downloadPdfBtn',
                   
                    'data-file-url': fileUrl
                });

                // Append button to this div
                $(this).append(button);
            }
        });
    });
});
</script>


    @include('modal.enquiry')

    @include('scripts.enquiry')
    
<style>
  .notification {
    position: absolute;
    z-index: 9999;
    background-color: #f44336;
    color: white;
    padding: 10px 16px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    pointer-events: none;
    transition: opacity 0.3s ease;
  }
</style>

<div class="notification" id="notification">Action not allowed!</div>

<script>
  function showNotification(message, x = window.innerWidth / 2, y = window.innerHeight / 2) {
      const notification = $('#notification');
      notification.stop(true, true); // clear previous animation queue
      notification.text(message);

      // Position notification near cursor or center fallback
      notification.css({
          top: y + 'px',
          left: x + 'px',
          display: 'block',
          opacity: 1
      });

      // Hide after 3 seconds
      setTimeout(() => {
          notification.fadeOut(300);
      }, 3000);
  }
  
  @if(!Auth::user())

  $(document).ready(function () {
      // Disable right-click
      $(document).on("contextmenu", function (e) {
          showNotification("Right-click is disabled.", e.pageX, e.pageY);
          return false;
      });

      // Disable text selection
      $('body').css({
          '-webkit-user-select': 'none',
          '-moz-user-select': 'none',
          '-ms-user-select': 'none',
          'user-select': 'none'
      }).on('selectstart', function (e) {
          showNotification("Text selection is disabled.", e.pageX, e.pageY);
          return false;
      });

      // Disable keyboard shortcuts
      $(document).on("keydown", function (e) {
          if (e.ctrlKey || e.metaKey) {
              const key = e.key.toLowerCase();
              const blockedKeys = {
                  "u": "View Source",
                  "c": "Copy",
                  "s": "Save",
                  "p": "Print",
                  "a": "Select All",
                  "i": "Developer Tools"
              };

              if (blockedKeys[key]) {
                  showNotification(`${blockedKeys[key]} is disabled.`, 200, 80);
                  e.preventDefault();
                  return false;
              }
          }

          if (e.keyCode === 123) {
              showNotification("Developer Tools are disabled.", 200, 80);
              return false;
          }

          if (e.keyCode === 116) {
              showNotification("Page refresh is disabled.", 200, 80);
              return false;
          }
      });

      // Disable copy
      $(document).on('copy', function (e) {
          const selection = window.getSelection();
          const rect = selection.rangeCount ? selection.getRangeAt(0).getBoundingClientRect() : { top: 100, left: 100 };
          showNotification("Copying content is not allowed.", rect.left + window.scrollX, rect.top + window.scrollY);
          e.preventDefault();
      });
  });
  @endif
</script>


<script>
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header.header_area");
    if (window.innerWidth > 991) {
      if (window.scrollY > 150) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  });
</script>


<script>
// Open enquiry form
document.getElementById("contactBtn").addEventListener("click", function(){
    document.getElementById("contactForm").classList.add("active");
});

// Close enquiry form
document.getElementById("closeForm").addEventListener("click", function(){
    document.getElementById("contactForm").classList.remove("active");
});
</script>

</body>


</html>
