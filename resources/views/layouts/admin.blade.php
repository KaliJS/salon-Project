<!DOCTYPE html>
<!-- saved from url=(0067)Vertical-IconSidedar-Light/index -->
<html lang="en" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta data -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta content="Admitro - Laravel Bootstrap Admin Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="laravel admin dashboard, best laravel admin panel, laravel admin dashboard, php admin panel template, blade template in laravel, laravel dashboard template, laravel template bootstrap, laravel simple admin panel,laravel dashboard template,laravel bootstrap 4 template, best admin panel for laravel,laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel admin template bootstrap 4">

    <!-- Title -->
    <title>Ocean Blue Wellness</title>

    <!--Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!--Bootstrap css -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/dark.css')}}" rel="stylesheet">
    <link href="{{asset('css/skin-modes.css')}}" rel="stylesheet">

    <!-- Animate css -->
    <link href="{{asset('css/animated.css')}}" rel="stylesheet">

    <!--Sidemenu css -->
       <link href="{{asset('css/sidemenu.css')}}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{asset('css/p-scrollbar.css')}}" rel="stylesheet">

    <!---Icons css
    <link href="{{asset('css/icons.css')}}" rel="stylesheet">
    -->
    <!-- Simplebar css -->
    <link rel="stylesheet" href="{{asset('css/simplebar.css')}}">

      <!-- Color Skin css -->
    <link id="theme" href="{{asset('css/color1.css')}}" rel="stylesheet" type="text/css">

    <!-- Switcher css -->
    <link rel="stylesheet" href="{{asset('css/switcher.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-text {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.active, .apexcharts-ycrosshairs.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.zoomable .hovering-pan {
  cursor: move
}

.apexcharts-xaxis,
.apexcharts-yaxis {
  pointer-events: none;
}

.apexcharts-zoom-icon,
.apexcharts-zoom-in-icon,
.apexcharts-zoom-out-icon,
.apexcharts-reset-zoom-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoom-in-icon svg,
.apexcharts-zoom-out-icon svg,
.apexcharts-reset-zoom-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.dark .apexcharts-zoom-icon svg,
.dark .apexcharts-zoom-in-icon svg,
.dark .apexcharts-zoom-out-icon svg,
.dark .apexcharts-reset-zoom-icon svg,
.dark .apexcharts-pan-icon svg,
.dark .apexcharts-selection-icon svg,
.dark .apexcharts-menu-icon svg,
.dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.selected svg,
.apexcharts-canvas .apexcharts-selection-icon.selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
  fill: #008FFB;
}
.light .apexcharts-selection-icon:not(.selected):hover svg,
.light .apexcharts-zoom-icon:not(.selected):hover svg,
.light .apexcharts-zoom-in-icon:hover svg,
.light .apexcharts-zoom-out-icon:hover svg,
.light .apexcharts-reset-zoom-icon:hover svg,
.light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-zoom-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-zoom-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoom-in-icon, .apexcharts-zoom-out-icon {
  transform: scale(0.7)
}

.apexcharts-zoom-out-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.light .apexcharts-menu-item:hover {
  background: #eee;
}
.dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-toolbar {
    /*opacity: 0;*/
  }

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}

.hidden{
    display:none;
}
</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script async="" type="text/javascript" src="{{asset('js/fingerprint2.min.js')}}"></script></head>
@yield('css')
  <body class="app sidebar-mini">

    
    

    <!---Global-loader-->
    <div id="global-loader">
      <img src="{{asset('users/images/loader.svg')}}" alt="loader">
    </div>
    <!--- End Global-loader-->
    <!-- Page -->
    <div class="page active">
      <div class="page-main">
        @include('includes.sidebar')
        <div class="app-content main-content">
          <div class="side-app">



        @include('includes.header')



        <!--aside closed-->
        <!-- App-Content -->


        <div>
          <div class="my-3">
            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <p class="mb-0">{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger text-center">
                    <p class="mb-0">{{ $message }}</p>
                </div>
            @endif


            @if($errors->any())
              {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif
          </div>
          @yield('content')
        </div>




        <!-- End app-content-->
      </div>
    </div>
  </div>


            <!--Footer-->

        @include('includes.footer')


      <!-- End Footer-->
    </div>
    <!-- End Page -->
      <!-- Back to top -->
    <a href="Vertical-IconSidedar-Light/index#top" id="back-to-top" style="display: none;"><i class="fa fa-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap4 js-->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!--Othercharts js-->
    <!-- <script src="{{asset('js/jquery.sparkline.min.js')}}"></script> -->

    <!-- Circle-progress js-->
    <script src="{{asset('js/circle-progress.min.js')}}"></script>

    <!-- Jquery-rating js-->
    <!-- <script src="{{asset('js/jquery.rating-stars.js')}}"></script> -->

    <!--Sidemenu js-->
    <script src="{{asset('js/sidemenu.js')}}"></script>

    <!-- P-scroll js-->
    <script src="{{asset('js/p-scrollbar.js')}}"></script>
    <script src="{{asset('js/p-scroll1.js')}}"></script>
    <script src="{{asset('js/p-scroll.js')}}"></script>


<!--INTERNAL Peitychart js-->
<!-- <script src="{{asset('js/jquery.peity.min.js')}}"></script> -->
<!-- <script src="{{asset('js/peitychart.init.js')}}"></script> -->

<!--INTERNAL Apexchart js-->
<!-- <script src="{{asset('js/apexcharts.js')}}"></script> -->

<!--INTERNAL ECharts js-->
<script src="{{asset('js/echarts.js')}}"></script>

<!--INTERNAL Chart js -->
<!-- <script src="{{asset('js/chart.bundle.js')}}"></script> -->
<script src="{{asset('js/utils.js')}}"></script>


<!--INTERNAL Moment js-->
<!-- <script src="{{asset('js/moment.js')}}"></script> -->

<!--INTERNAL Index js-->
<script src="{{asset('js/index1.js')}}"></script>

    <!-- Simplebar JS -->
    <script src="{{asset('js/simplebar.min.js')}}"></script>
    <!-- Custom js-->
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Switcher js-->
    <script src="{{asset('js/switcher.js')}}"></script>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 60L-1 60C-1 60 10.652173913043478 60 10.652173913043478 60C10.652173913043478 60 21.304347826086957 60 21.304347826086957 60C21.304347826086957 60 31.956521739130434 60 31.956521739130434 60C31.956521739130434 60 42.608695652173914 60 42.608695652173914 60C42.608695652173914 60 53.26086956521739 60 53.26086956521739 60C53.26086956521739 60 63.91304347826087 60 63.91304347826087 60C63.91304347826087 60 74.56521739130434 60 74.56521739130434 60C74.56521739130434 60 85.21739130434783 60 85.21739130434783 60C85.21739130434783 60 95.8695652173913 60 95.8695652173913 60C95.8695652173913 60 106.52173913043478 60 106.52173913043478 60C106.52173913043478 60 117.17391304347827 60 117.17391304347827 60C117.17391304347827 60 127.82608695652173 60 127.82608695652173 60C127.82608695652173 60 138.47826086956522 60 138.47826086956522 60C138.47826086956522 60 149.1304347826087 60 149.1304347826087 60C149.1304347826087 60 159.78260869565216 60 159.78260869565216 60C159.78260869565216 60 170.43478260869566 60 170.43478260869566 60C170.43478260869566 60 181.08695652173913 60 181.08695652173913 60C181.08695652173913 60 191.7391304347826 60 191.7391304347826 60C191.7391304347826 60 202.3913043478261 60 202.3913043478261 60C202.3913043478261 60 213.04347826086956 60 213.04347826086956 60C213.04347826086956 60 223.69565217391303 60 223.69565217391303 60C223.69565217391303 60 234.34782608695653 60 234.34782608695653 60C234.34782608695653 60 245 60 245 60C245 60 245 60 245 60 "></path></svg>

    <script type="text/javascript" src="{{asset('js/22aff56f45f6b36dec.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/int.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('js/l.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/22aff56f45f6b36dec(1).js')}}"></script>-->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.multipurpose_tabcontent.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tabs.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <iframe style="position:absolute;left:-999px;top:-999px;visibility:hidden" src="{{asset('saved_resource.html')}}"></iframe>
    <iframe style="display: none; visibility: hidden;" src="{{asset('saved_resource(1).html')}}"></iframe>

    <script type="text/javascript" src="{{asset('js/license.85.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('select').select2();
      });
    </script>
    @yield('js')
</body>
</html>

