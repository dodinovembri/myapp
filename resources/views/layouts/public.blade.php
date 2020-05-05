<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>It's Me</title>    

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/theme-shop.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('tmp_pbl/vendor/rs-plugin/css/navigation.css') }}">
        
        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/demos/demo-resume.css') }}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/skins/skin-resume.css') }}"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('tmp_pbl/css/custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('tmp_pbl/vendor/modernizr/modernizr.min.js') }}"></script>

    </head>
    <body data-spy="scroll" data-target=".wrapper-spy">

    @yield('content')

        <!-- Vendor -->
        <script src="{{ asset('tmp_pbl/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/vivus/vivus.min.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('tmp_pbl/js/theme.js') }}"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('tmp_pbl/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('tmp_pbl/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('tmp_pbl/js/views/view.contact.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('tmp_pbl/js/demos/demo-resume.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ asset('tmp_pbl/js/custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('tmp_pbl/js/theme.init.js') }}"></script>


        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->


    </body>
</html>
