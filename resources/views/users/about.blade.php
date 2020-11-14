@extends('layouts.index')

@section('content')

		
            <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{url('users/images/31.jpg')}});">
              <div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                      <div class="banner-title-outer">
                          <div class="banner-title-name">
                            <h2 class="site-text-primary">About Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>About 1</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- ABOUT SECTION START -->
            <div class="section-full welcome-section-outer">
              <div class="welcome-section-top shadow-lg bg-white p-tb80">
                    <div class="container">
                      <div class="row">
                          <div class="col-lg-7 col-md-12">
                                <div class="welcom-to-section">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator">
                                            <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                            <div>Welcome to</div>
                                            <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <h2>Our Salon is Most Popular, Clean and Recommended Hair Salon</h2>
                                    <!-- TITLE END-->
                                    <p>Here at Ocean Blue Wellness we understand what our customers want. If you don't feel happy with how your hair looks and feels, 
                                    it will show. That is why we strive to give our customers the hair cut, style or treatment they've always 
                                    wanted. Ocean Blue Wellness is a team of highly trained and skilled professionals 
                                    who are here to help and guide you to the style,cut or colour that best suits you whie ensuring you are comfortable 
                                    and informed every step of the way. We thrive on customer satisfaction and we are here to built a dedicated and loyal following, 
                                    with a reputation for the highest quality work and customer service.</p> 
                                    
                                    <div class="welcom-to-section-bottom d-flex justify-content-between">
                                        
                                        
                                    </div>   
                                                                  
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                              <div class="img-colarge">
                                  <div class="colarge-1"><img src="{{asset('users/images/s1.jpg')}}" alt=""></div>
                                    <div class="colarge-2"><img src="{{asset('users/images/s2.jpg')}}" alt=""></div>
                                    <div class="colarge-3 slide-right"><img src="{{asset('users/images/s3.jpg')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                                       
                <div class="welcome-section-bottom overlay-wraper bg-cover bg-no-repeat " style="background-image:url({{url('users/images/bg-2.jpg')}});"> 
                    <div class="overlay-main bg-orange-light opacity-09"></div>
                        <div class="container welcome-section-bottom-space p-t80 p-b50">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="video-section-outer mfp-gallery">
                                        <!--Fade slider-->
                                        <div class="owl-carousel home-video-slider owl-btn-top-left light-next-prev m-b30">
                                        
                                            
                                            
                                            <div class="item">
                                                <div class="video-section">
                                                    <img src="{{asset('users/images/obw-covid-1.jpg')}}" alt="">
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <div class="video-section">
                                                    <img src="{{asset('users/images/obw-covid-2.jpg')}}" alt="">
                                                </div>
                                            </div> 

                                            
                                                                                                                                                                  
                                        
                                        </div> <!--fade slider END-->                                
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="about-section-outer">
                                        <!-- TITLE START-->
                                        <div class="left wt-small-separator-outer">
                                            <div class="wt-small-separator">
                                                <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                                <div>Enjoy Comfort, peace and quiet</div>
                                                <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                            </div>
                                        </div>
                                        <h2>We Pledge to Take all needful Steps to provide you a covid - 19 Safe Environment
                                        </h2>
                                        <!-- TITLE END-->

                                        
                                        <p>Please read before arriving to your appointment</p>
                                        <p>* Please notify us if your feeling unwell or have been around someone unwell.</p>
                                        <p>* Please come to your appointment on your own - No family members or friends</p>
                                        <p>* You will be required to fill in an COVID-19 health questionnaire on arrival</p>
                                        <p>* All appointments will be by appointment only. Please call, email or book online for an appointment if possible.</p>
                                        <p>* Please don't arrive early to your appointment as the door will be locked until we have finished with our client.</p>

                                        <div class="counter-outer p-t10">                            
                                            
                                            <div class="row justify-content-center">
                                                    
                                                <div class="col-lg-4 col-md-4 m-b30 ">
                                                    <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url({{url('users/images/count-bg.png')}});">
                                                        <h2 class="counter site-text-secondry">23</h2>
                                                        <span class="site-text-secondry title-style-2">Awards</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4 col-md-4 m-b30">
                                                    <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url({{url('users/images/count-bg.png')}})">
                                                        <h2 class="counter site-text-secondry">14</h2>
                                                        <span class="site-text-secondry title-style-2">Years</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4 col-md-4 m-b30">
                                                    <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url({{url('users/images/count-bg.png')}});">
                                                        <h2 class="counter site-text-secondry">26</h2>
                                                        <span class="site-text-secondry title-style-2">Experts</span>
                                                    </div>
                                                </div>
       
                                            </div>                            
                                        
                                        </div>   
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
  
                </div>                                        

            </div>   
            <!-- ABOUT SECTION  SECTION END -->   
                                                  
            <!-- ABOUT STORY SECTION START -->
            <div class="section-full  p-t80 p-b80  overlay-wraper" style="background-image:url({{url('users/images/bg-2.jpg')}});">
              <div class="overlay-main site-bg-primary opacity-09"></div>
                <div class="container">
                                    
                    <div class="section-content">
                    
                        <div class="info-video-section text-white text-center">
                                <div class="info-video-title max-w700 ml-auto mr-auto">
                                  <h4>The Elysian team embody an approach that is personal, calm and current with a sole focus on you.</h4>
                                    <h2 class="wt-title m-t0">About Our Story</h2>
                                    <p>What are you waiting for?</p>
                                    <a href="javascript:;" class="site-button site-btn-effect">Make An Appointment</a>
                                </div>
                        </div>
                                               
                    </div>
                    
        </div>
            </div>
            <!-- ABOUT STORY SECTION END --> 
            
                           
            
        </div>
        <!-- CONTENT END -->

@stop
  