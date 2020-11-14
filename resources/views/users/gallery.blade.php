@extends('layouts.index')

@section('content')

		<!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{url('users/images/9.jpg')}});">
              <div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                      <div class="banner-title-outer">
                          <div class="banner-title-name">
                            <h2 class="site-text-primary">Gallery</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- GALLERY SECTION START -->
            <div class="section-full p-t80 p-b50 bg-orange-light">
                <div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap work-grid p-b30 text-center">
                        <ul class="masonry-filter link-style ">
                                <li class="active"><a data-filter="*" href="http://thewebmax.com/saloni/gallery-grid.html#">All</a></li>
                                <li><a data-filter=".cat-1" href="http://thewebmax.com/saloni/gallery-grid.html#">Hair Product</a></li>
                                <li><a data-filter=".cat-2" href="http://thewebmax.com/saloni/gallery-grid.html#">Hairstyle</a></li>
                                <li><a data-filter=".cat-3" href="http://thewebmax.com/saloni/gallery-grid.html#">Makeup</a></li>
                                <li><a data-filter=".cat-4" href="http://thewebmax.com/saloni/gallery-grid.html#">Coloring</a></li>
                                <li><a data-filter=".cat-5" href="http://thewebmax.com/saloni/gallery-grid.html#">Hair Wash</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="masonry-wrap mfp-gallery  row clearfix" style="position: relative; height: 1480.69px;">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 0px;">
                        
                        <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic1.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0">Pixie</h3>
                                    <p class="title-style-2">Hair Products</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic1.jpg')}}" class="mfp-link"></a>
                            </div>                              
                            
                                                                                             
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 0px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic7.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0">Colors</h3>
                                    <p class="title-style-2">Hairstyle</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic7.jpg')}}" class="mfp-link"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 0px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic4.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Braids</h3>
                                    <p class="title-style-2">Hairstyle</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic4.jpg')}}" class="mfp-link"></a>
                            </div>       
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 493px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic3.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Keratin</h3>
                                    <p class="title-style-2">Hairstyle</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic3.jpg')}}" class="mfp-link"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 493px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic5.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Curls</h3>
                                    <p class="title-style-2">Hairstyle</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic5.jpg')}}" class="mfp-link"></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 493px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic6.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Shades</h3>
                                    <p class="title-style-2">Hairstyle</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic6.jpg')}}" class="mfp-link"></a>
                            </div>      
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 987px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic7.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0">Waves</h3>
                                    <p class="title-style-2">Hair Products</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic7.jpg')}}" class="mfp-link"></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 987px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic8.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Tail</h3>
                                    <p class="title-style-2">Hair Products</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic8.jpg')}}" class="mfp-link"></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 987px;">
              <div class="project-img-effect-1">
                                <img src="{{asset('users/images/pic9.jpg')}}" alt="">
                                <div class="wt-info">
                                    <h3 class="wt-tilte  m-b10 m-t0">Layers</h3>
                                    <p class="title-style-2">Coloring</p>
                                </div>
                                <i></i>
                                <a href="{{asset('users/images/pic9.jpg')}}" class="mfp-link"></a>
                            </div>   
                        </div>                                   
                     </div>
                    <!-- GALLERY CONTENT END --> 
                </div>
            </div>   
            <!-- GALLERY SECTION END --> 
            
        </div>
        <!-- CONTENT END -->

@stop
  