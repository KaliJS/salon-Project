@extends('layouts.index')

@section('content')

		<!-- CONTENT START -->
        <div class="page-content">
        

          @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{url('users/images/51.jpg')}});">

              <div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">

                    <div class="wt-bnr-inr-entry">
                      <div class="banner-title-outer">
                          <div class="banner-title-name">
                            <h2 class="site-text-primary">Contact Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- SECTION CONTENTG START -->
            <div class="section-full  p-t80">
           
                <!-- LOCATION BLOCK-->
                                    

                
           </div>
           
               <!-- GOOGLE MAP & CONTACT FORM -->
             <div class="section-full  p-t80 p-b80 bg-orange-light">   
                <div class="section-content">
                    <div class="container">
                        <div class="contact-one  ">
                            <!-- CONTACT FORM-->

                                    <form class="" method="POST" action="{{ route('contact.store') }}">
                                      @csrf
                                        <!-- TITLE START -->
                                        <div class="center wt-small-separator-outer section-head">
                                            <div class="wt-small-separator">
                                                <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                                <div>Contact Us</div>
                                                <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                            </div>
                                            <h2 data-title="Form">Get In Touch</h2>
                                        </div>                                         
                                        
                                        <!-- TITLE END --> 
                                                                                
                                        <div class="row">
                                           <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="name" type="text" required="" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                   <input name="email" type="text" class="form-control" required="" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone">
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                     <input name="subject" type="text" class="form-control" required="" placeholder="Subject">
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                 </div>
                                            </div>
                                            
                                           <div class="col-md-12">
                                                <button type="submit" class="site-button-secondry site-btn-effect">Submit Now</button>
                                            </div>
                                            
                                        </div>
                                   </form>

                                    <div class="contact-info m-t30">
                                        <div class="contact-info-inner">
                                             
                                            <!-- TITLE START-->
                                            <div class="center wt-small-separator-outer section-head">
                                                <div class="wt-small-separator">
                                                    <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                                    <div>Contact info</div>
                                                    <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                                </div>
                                                <h2 data-title="Info">Our Full Info</h2>
                                            </div>                                            
                                            <!-- TITLE END--> 
                                            
                                            <div class="contact-info-section text-black">  
                                                 
                                                 <div class="row"> 
                                                 
                                                    <div class="col-lg-3 col-md-6">                                                            
                                                        <div class="wt-icon-box-wraper left m-b30">
                                                            
                                                            <div class="icon-content">
                                                                <h4 class="m-t0">Phone number</h4>
                                                                <p>9972011222</p>
                                                                <p>9108031222</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="wt-icon-box-wraper left m-b30">
                                                           
                                                            <div class="icon-content">
                                                                <h4 class="m-t0">Email address</h4>
                                                                <p>info@obw1.com</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="wt-icon-box-wraper left m-b30">
                                                            
                                                            <div class="icon-content">
                                                                <h4 class="m-t0">Address info</h4>
                                                                <p>No 1, Balarama Layout, Krishna Garden Main Road, Near Happy Home Super Market, Rajarajeshwari Nagar, Bengaluru - 560098 </p>
                                                                <p>Shop No 6 & 7, Opp Vasthugreens Apartment, Near Gudde Anjineya Temple, Hemmegepura Road, Kengeri Ward No 198, Bengaluru - 560060 </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="wt-icon-box-wraper left">
                                                            
                                                            <div class="icon-content">
                                                                <h4 class="m-t0">Opening Hours</h4>
                                                                <ul class="list-unstyled m-b0">
                                                                  <li>Mon-Fri: 9 am – 6 pm</li>
                                                                  <li>Saturday: 9 am – 4 pm</li>
                                                                  <li>Sunday: Closed</li>
                                                                </ul>
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
            </div>
            
        </div>
        <!-- CONTENT END -->

@stop
  