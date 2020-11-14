<!DOCTYPE html>
<!-- saved from url=(0038)http://thewebmax.com/saloni/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- META -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">    
    <meta name="description" content="">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="http://thewebmax.com/saloni/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="http://thewebmax.com/saloni/images/favicon.png">
    
    <!-- PAGE TITLE HERE -->
    <title>Saloni Template | Home Page Style 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/font-awesome.min.css')}}">

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/bootstrap-select.min.css')}}">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/loader.min.css')}}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/style.css')}}">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/flaticon.min.css')}}">     
 
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/css/navigation.css')}}">
        
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 

    
<style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style></head>

<body>

  <div class="page-wraper"> 



        @include('includes.users.header')


        




        <!--aside closed-->
        <!-- App-Content -->  



        @yield('content')



        <!-- End app-content-->
      </div>
    </div>
  </div>


            <!--Footer-->
      
        @include('includes.users.footer')


    <!-- BUTTON TOP START -->
    <button class="scroltop" style="display: none;"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


 
  </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area" style="display: none;">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader">
            <div class="cssload-dots">
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
            </div>
        </div>  
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="{{asset('users/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('users/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script src="{{asset('users/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('users/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script src="{{asset('users/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{asset('users/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('users/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('users/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script src="{{asset('users/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script src="{{asset('users/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('users/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{asset('users/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script src="{{asset('users/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script src="{{asset('users/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('users/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->  
<script src="{{asset('users/js/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="{{asset('users/js/rev-script-2.js')}}"></script>

</body>
</html>