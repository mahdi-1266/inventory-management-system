<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from megamindlab.com/html/rave/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jan 2026 05:29:08 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Rave - HTML 5 Template Preview</title>

<!-- Fav Icon --> 
<link rel="icon" href="{{ asset('frontend/assets/images/logo.png') }}" type="image/x-icon">

<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/%40fortawesome/fontawesome-free%406.4.2/css/all.min.css">
<link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/global.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/timePicker.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">

</head>

<!-- page wrapper -->
<body>
    <canvas class="tcg-smoke-cursor" id="tcg-smoke-cursor" width="1903" height="517"></canvas>
    
    <!-- border -->
    <div class="body___border">
        <div class="border__top"></div>
        <div class="border__left"></div>
        <div class="border__right"></div>
        <div class="border__bottom"></div>
    </div>

    <div class="boxed_wrapper one">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="V" class="letters-loading">
                                V
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        @include('frontend.body.header')
        <!-- main-header end -->


        @yield('home_page') 

        <!-- main-footer -->
        @include('frontend.body.footer')
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="icon-short-arrow-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/smoke-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/timePicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from megamindlab.com/html/rave/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jan 2026 05:29:43 GMT -->
</html>
