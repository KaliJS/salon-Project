@extends('layouts.index')

@section('content')

		
            <!-- CONTENT START -->
        <div class="page-content"> 
            <div class="slider-outer">
                <!-- SLIDER START -->
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                    <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                        <ul>    
                        



                            <!-- SLIDE 1 -->
                            <li data-index="rs-901" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{asset('users/images/slide1.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('users/images/slide1.jpg')}}"  alt=""  data-lazyload="{{asset('users/images/slide1.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-901-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
                                
                                <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                                    id="slide-901-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"                     
                                    data-type="button" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                    
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[200,200,200,150]"
                                    data-paddingright="[150,150,150,100]"
                                    data-paddingbottom="[200,200,200,150]"
                                    data-paddingleft="[150,150,150,100]"
                
                                    style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                              
                               
                                <!-- LAYER NR. 3 [ Black Box ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-901-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"  
                                data-fontsize="['48','48','48','34']"
                                data-lineheight="['56','56','56','50']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                color:#111;
                                
                                border-width:0px; font-family: 'Caveat', cursive;">Look Great. Feel Amazing</div>
                                
                                
                                                            
                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-901-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"  
                                data-fontsize="['72','72','72','38']"
                                data-lineheight="['66','66','48','38']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                                
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                 
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;
                               ">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">Welcome to Ocean Blue Wellness</span>
                                </div>
                               
                                </div>
                            
                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-901-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"  
                                data-fontsize="['20','20','20','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['600','600','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">You dream about sleek, healthy looking hair that looks picture perfect, ready to rock on any occasion?</span>
                                </div>
                            
                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-901-layer-6"                      
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
        
                                data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','300','300']"
                                data-height="['none','none','none','none']"
                                
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                                </div>
                                                            
                                <!-- Border Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                    id="slide-901-layer-8" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','off','off']"
                         
                                    data-type="shape" 
                                    data-basealign="slide" 
                                    data-responsive_offset="off" 
                                    data-responsive="off"
                                    data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                        
                                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>
    
                            </li>
                            
                            <!-- SLIDE 2 -->
                            <li data-index="rs-902" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{asset('users/images/slide2.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('users/images/slide2.jpg')}}"  alt=""  data-lazyload="{{asset('users/images/slide2.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-902-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
                                
                                <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                                    id="slide-902-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"                     
                                    data-type="button" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                    
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[200,200,200,150]"
                                    data-paddingright="[150,150,150,100]"
                                    data-paddingbottom="[200,200,200,150]"
                                    data-paddingleft="[150,150,150,100]"
                
                                    style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                              
                               
                                <!-- LAYER NR. 3 [ Black Box ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-902-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"  
                                data-fontsize="['48','48','48','34']"
                                data-lineheight="['56','56','56','50']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                color:#111;
                                border-width:0px; font-family: 'Caveat', cursive;">Look Great. Feel Amazing</div>
                                
                                
                                                            
                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-902-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"  
                                data-fontsize="['72','72','72','38']"
                                data-lineheight="['66','66','48','38']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                                
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                 
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;max-width: 800px !important;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">Naturally Focused</span>
                                </div>
                                   
                                </div>
                            
                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-902-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"  
                                data-fontsize="['20','20','20','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['600','600','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">Professional Beauty Salon and Spa For Men & Women</span>
                                </div>
                            
                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-902-layer-6"                      
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
        
                                data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','300','300']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                                </div>
                                                            
                                <!-- Border Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                    id="slide-902-layer-8" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','off','off']"
                         
                                    data-type="shape" 
                                    data-basealign="slide" 
                                    data-responsive_offset="off" 
                                    data-responsive="off"
                                    data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                        
                                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>
    
                            </li>
                            
                            <!-- SLIDE 3 -->
                            <li data-index="rs-903" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{asset('users/images/slide3.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('users/images/slide3.jpg')}}"  alt=""  data-lazyload="{{asset('users/images/slide3.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-903-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
                                
                                <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                                    id="slide-903-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"                     
                                    data-type="button" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                    
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[200,200,200,150]"
                                    data-paddingright="[150,150,150,100]"
                                    data-paddingbottom="[200,200,200,150]"
                                    data-paddingleft="[150,150,150,100]"
                
                                    style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                              
                               
                                <!-- LAYER NR. 3 [ Black Box ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-903-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"  
                                data-fontsize="['48','48','48','34']"
                                data-lineheight="['56','56','56','50']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                color:#111;
                                border-width:0px; font-family: 'Caveat', cursive;">Look Great. Feel Amazing</div>
                                
                                
                                                            
                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-903-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"  
                                data-fontsize="['72','72','72','38']"
                                data-lineheight="['66','66','48','38']"
                                data-width="['700','700','96%','96%']"
                                data-height="['none','none','none','none']"
                               
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                 
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">Nurture Yourself</span>
                                </div>
                                
                                </div>
                            
                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-903-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
                                data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"  
                                data-fontsize="['20','20','20','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['600','600','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">Ocean blue wellness is a serene oasis for skin treatments, beauty services and spa</span>
                                </div>
                            
                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-903-layer-6"                      
                                data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" 
        
                                data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','300','300']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                                </div>
                                                            
                                <!-- Border Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                    id="slide-903-layer-8" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','off','off']"
                         
                                    data-type="shape" 
                                    data-basealign="slide" 
                                    data-responsive_offset="off" 
                                    data-responsive="off"
                                    data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                        
                                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>
    
                            </li>                                                        
                                                                       
                             
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> 
                    </div>
                </div>
            
                <div class="slider-social-outer social-mobile-hide">
                    <div class="slider-social-info">
                        <ul class="list-unstyled text-black">
                            <li><a href="https://www.facebook.com/Ocean-Blue-Wellness-102561188341565"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/oceanbluewellness/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCgP5GHKwhfAKsYa81lMaf_Q/featured"><i class="fa fa-youtube"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="slider-appointment-outer">
                    <div class="slider-appointment-btn">
                        <a href="javascript:;" class="contact-slide-show"><span> Make An Appointment</span></a>
                    </div>
                </div>            
            
                <!-- Make An Appointment -->                            
                <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url({{url('users/images/add-bg.png')}})"> 
                    <div class="contact-nav">
                         <a href="javascript:void(0)" class="contact_close">&times;</a>
                         <div class="contact-nav-form">
                            <div class="contact-nav-info bg-white p-a30">
                                <form class="cons-contact-form" method="post" action="form-handler2.php">
                                    <div class="m-b30">
                                        <!-- TITLE START -->
                                         <h3 class="m-b30">Get In Touch</h3>
                                        <!-- TITLE END --> 
                                            <div class="row">
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                       <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                     </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                         <input name="subject" type="text" class="form-control" required placeholder="Subject">
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
                                    </div>
                                </form>
                                <div class="contact-nav-inner text-black">
                                    <!-- TITLE START -->
                                    <h3 class="m-b30">Contact Info</h3>
                                    <!-- TITLE END -->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                        <p>(456) 789 10 12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h5 class="m-t0 font-weight-500">Email address</h5>
                                                        <p>demo@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h5 class="m-t0 font-weight-500">Address info</h5>
                                                        <p>55/11 Land Street, Modern New Yourk City, USA</p>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </div>
                            
                            <div class="slider-social-outer social-mobile-show">
                                <div class="slider-social-info">
                                    <ul class="list-unstyled text-black">
                                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                                                                                                
                         </div>
                    </div> 
                </div>                 
            </div>
            <!-- SLIDER END -->
                             
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
                                            <div>Enjoy Comfort, peace and quiet</div>
                                            <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <h2>Our Salon is Most Popular, Clean and Recommended Hair Salon</h2>
                                    <!-- TITLE END-->
                                    <p>Here at Ocean Blue Wellness we understand what our customers want. If you don't feel happy with how your hair looks and feels, it will show. That is why we strive to give our customers the hair cut, style or treatment they've always 
                                    wanted. Ocean Blue Wellness is a team of highly trained and skilled professionals</p> 
                                    
                                    <div class="welcom-to-section-bottom d-flex justify-content-between">
                                        <div class="welcom-btn-position m-t20"><a href="{{url('/about')}}" class="site-button site-btn-effect">More About</a></div>
                                        
                                    </div>   
                                    <div class="hilite-large-title">
                                        <span>Welcome</span>
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
            
            <!-- SERVICES SECTION START -->
            <div class="section-full p-t80 p-b70 bg-white bg-no-repeat bg-top-right" style="background-image:url({{url('users/images/bubble-bg.png')}});">
            
                <div class="container">
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        
                        <h2 data-title="Services">Our Services</h2>
                    </div>
                    
                    <!-- TITLE END-->
                </div> 
                                       
                <div class="section-content container-fluid"> 
                
                    <div class="owl-carousel services-slider owl-btn-bottom-center light-next-prev">
                    
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/1-Women-Hair-Cut-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">01</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Women Hair Cut</a></h3> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/2-Men-Hair Cut-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">02</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Men HairCuts</a></h3> 
                                </div>
                            </div>
                        </div> 
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/3-Hair-Treatment.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">03</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Hair Treatment</a></h3> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/4-Straightening.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">04</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Straightening</a></h3> 
                                </div>
                            </div>
                        </div> 
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/5-Smoothing.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">05</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Smoothing</a></h3> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/6-Threading.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">06</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Threading</a></h3> 
                                </div>
                            </div>
                        </div> 

                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/7-Nail-Extension.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">07</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Nail Extension</a></h3> 
                                </div>
                            </div>
                        </div>                                                           

                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/8-Facials-Cleanups.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">08</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Facials / Cleanups</a></h3> 
                                </div>
                            </div>
                        </div>              
                        
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/9-Manicure-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">09</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Manicure</a></h3> 
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/10-Pedicure-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">10</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Pedicure</a></h3> 
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/11-Waxing-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">11</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Waxing</a></h3> 
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/12-Body-Treatments-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">12</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Body Treatments</a></h3> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/13-Refreshing Facials-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">13</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Refreshing Facials</a></h3> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/14-Make-Up-min.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">14</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Make Up</a></h3> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/15-Pre-Bridal-Packages.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">15</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Pre Bridal Packages</a></h3> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-box service-box-1">
                                <div class="service-box-media"><img src="{{asset('users/images/pic6.jpg')}}" alt=""></div>
                                <div class="service-box-info p-t20 text-center">
                                    <h2 class="text-black">16</h2>      
                                    <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Yoga Classes and Therapy</a></h3> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>                                                 

            </div>   
            <!-- SERVICES SECTION END -->               

            <!-- PRICING SECTION START -->
            <div class="section-full p-t80 p-b50 bg-orange-light bg-brush-img">
                <div class="container">
                    <div class="section-content">
                    
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                            <div>Cutting and styling</div>
                            <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                        </div>
                        <h2 data-title="Pricing">Our Pricing</h2>
                    </div>
                    <!-- TITLE END-->
                               
                        <div class="row justify-content-center">
                        
                            <div class="col-lg-6 col-md-12 col-sm-12 m-b30">
                            
                              <div class="pricing-list-block bg-white p-a20">
                                  <div class="pricing-list-img p-b10"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                  <ul>
                                      <li>
                                            <div class="price-list-info">
                                                <h3>Women Starts From </h3>
                                                
                                            </div>
                                            
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Hair Cut with Blow dry</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">800</span></h3>
                                            </div>
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Nail Extension</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">300</span></h3>
                                            </div>
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Body Treatments</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">500</span></h3>
                                            </div>
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Facial</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">500</span></h3>
                                            </div>
                                        </li>
                                        <li>
                                          <div class="price-list-info">
                                                <h3>Smoothing</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">2000</span></h3>
                                            </div>
                                        </li>                                                                                                                                                                
                                    </ul>
                                </div>
                                                          
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 m-b30">
                              <div class="pricing-list-block bg-white p-a20">
                                  <div class="pricing-list-img p-b10"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                  <ul>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Men Starts From</h3>
                                                
                                            </div>
                                            
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Hair Cut</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">400</span></h3>
                                            </div>
                                        </li>  
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Straightening </h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">3000</span></h3>
                                            </div>
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Hair Treatment</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">300</span></h3>
                                            </div>
                                        </li>
                                      <li>
                                          <div class="price-list-info">
                                                <h3>Bread Trim</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">200</span></h3>
                                            </div>
                                        </li>                                                                               <li>
                                          <div class="price-list-info">
                                                <h3>Highlights</h3>
                                                
                                            </div>
                                            <div class="price-list-amount">
                                              <h3 class="text-black"><span class="amount-price">200</span></h3>
                                            </div>
                                        </li>                                                                                                                          
                                    </ul>
                                </div>                                                          
                            </div>
                                                                                  
                        </div>
                        
                    </div>
                </div>
            </div>   
            <!-- PRICING SECTION END -->     
            
      <!-- DISCOUNT SECTION START -->
      <div class="section-full  p-tb80 bg-white discount-section-outer">

                <div class="container">
                  <div class="discount-add shadow-lg">
                      <div class="row no-gutters">
                          <div class="col-xl-6 col-lg-7 col-md-12 bg-cover" style="background-image:url({{url('users/images/add-bg.png')}});">
                              <div class="discount-add-info">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator">
                                            <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                            <div>Make an Appointment!</div>
                                            <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <h2>&amp; get <span class="text-black"> 10%</span> discount!</h2>
                                    <!-- TITLE END-->
                                    <p>Glowing, dewy skin is our thing.</p>
                                    <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                                     <div class="hilite-large-title">
                                        <span>Offer</span>
                                    </div>
                                </div>
                            </div>
                            
                          <div class="col-xl-6 col-lg-5 col-md-12 bg-cover discount-add-pic  bg-bottom-center" style="background-image:url({{url('users/images/add-pic.jpg')}})">

                            </div>                              
                        
                        </div>
  
                    </div>
                </div>

            </div>
            <!-- DISCOUNT WE LOVE SECTION START -->   
            
                                         

            
            
            <!-- CONTACT US START -->
            <div class="section-full p-t80 p-b50 bg-orange-light">
                <div class="container">
                    <div class="section-content">

                               
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="home-contact-section m-b30">
                                            <form class="cons-contact-form" method="post" action="http://thewebmax.com/saloni/form-handler2.php">
                                               
                                                <!-- TITLE START-->
                                                <div class="left wt-small-separator-outer">
                                                    <div class="wt-small-separator">
                                                        <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                                                        <div>Have Questions?</div>
                                                        <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                                                    </div>
                                                </div>
                                                <h2>Feel free to get in touch! contact now</h2>
                                                <!-- TITLE END-->
                                                                                        
                                                <div class="row m-b30">
                                                   <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input name="username" type="text" required="" class="form-control" placeholder="Name">
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
                                                        <button type="submit" class="site-button site-btn-effect">Send us a message</button>
                                                    </div>
                                                    
                                                </div>
                                           </form>                                        
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-right-section">
                                          <div class="wt-media">
                                              <img src="{{asset('users/images/3-Hair-Treatment.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>      
                        
                    </div>
                </div>
            </div>   
            <!-- CONTACT US SECTION END -->            
                
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full  p-t80 p-b80 bg-white testimonial-2-outer">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div  class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                            <div>What our clients say</div>
                            <div  class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}"  alt=""></div>
                        </div>
                        <h2 data-title="Clients">Testimonials</h2>
                    </div>
                    
                    <!-- TITLE END-->
                    <div class="section-content testimonial-home bg-cover" style="background-image:url({{url('users/images/add-bg.png')}})">
                        <div id="testimonial-2-content" class="owl-carousel  dark-next-prev">
                            <div class="item">
                                <div class="testimonial-2 corner-radius">
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>I was so pleased with my hair, the cut and styling was exactly what i wanted and the toner was perfect im very happy</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-info">
                                                <span class="testimonial-name  title-style-2">Shruthi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="testimonial-2 corner-radius">
                                    
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>This is not just another nail salon! These ladies are super talented! My nails have never looked/felt more amazing!! The environment here is so happy and
 cheery! Keep up the great work!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-info">
                                                <span class="testimonial-name title-style-2">Carolina Miller</span>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="testimonial-2 corner-radius">
                                    
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>This is not just another nail salon! These ladies are super talented! My nails have never looked/felt more amazing!! The environment here is so happy and
 cheery! Keep up the great work!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-info">
                                                <span class="testimonial-name  title-style-2">Francis Burton</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                         
                        </div>
                        
                        <div id="testimonial-2-pic" class="owl-carousel owl-theme testimonial-1-thumb">
                            <div class="item">
                                <div class="wt-media">
                                    <img src="{{asset('users/images/tes1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="{{asset('users/images/tes2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="{{asset('users/images/tes3.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>                        
                    </div>
                    
                </div>
            </div>
            <!-- TESTIMONIAL SECTION END -->                   
                        
            <!-- OUR BLOG START -->
            <div class="section-full  p-t80 p-b40 bg-white blog-post-outer-3 ">
        <div class="container">
                
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div class="sep-leaf-left"><img src="{{asset('users/images/sep-leaf-left.png')}}" alt=""></div>
                            <div>Update The New Trend</div>
                            <div class="sep-leaf-right"><img src="{{asset('users/images/sep-leaf-right.png')}}" alt=""></div>
                        </div>
                        <h2 data-title="Blog">Latest Articles</h2>
                    </div>
                    <!-- TITLE END-->
     
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!--Block one-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('users/images/thum1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span>20 Jan 2019</span> </li>
                                                <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                                <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>
                                            </ul>
                                        </div>                                 
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;" class="site-text-primary">How to keep your makeup in place all day</a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="javascript:;" class="site-button-link black">Read More</a>
                                        </div>                                        
                                   </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!--Block two-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('users/images/thum2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span>25 Jan 2019</span> </li>
                                                <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                                <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>                                      
                                            </ul>
                                        </div>                                  
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;" class="site-text-primary">Everything’s Coming Up Rose Gold</a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="javascript:;" class="site-button-link black">Read More</a>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!--Block three-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('users/images/thum3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span>31 Jan 2019</span> </li>
                                                <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                                <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>
                                            </ul>
                                        </div>                                  
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;" class="site-text-primary">How to return your hair to normal after the Winter</a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="javascript:;" class="site-button-link black">Read More</a>
                                        </div>
                                    </div>                                
                                </div> 
                            </div>                                                        
                                                        
                        </div>
                    </div>
                </div>
                
             </div>   
            <!-- OUR BLOG END -->
            
            <!-- INSTAGRAM FOLLOW START -->
            <div class="section-full p-t80 p-b50 bg-orange-light">
                <div class="container-fluid">
                    <div class="section-content">
                               
                            <div class="section-content">
                                <div class="row">
                                
                                    <div class="col-xl-4 col-lg-5 col-md-12 instagram-follows-section bg-white">
                                        <div class="p-a30">
                                            <!-- TITLE START-->
                                            <div class="left wt-small-separator-outer">
                                                <div class="wt-small-separator">
                                                    <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                                    <div>Follow Us On</div>
                                                    <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                                </div>
                                            </div>
                                            <h2>Instagram</h2>
                                            <!-- TITLE END-->
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-8 col-lg-7 col-md-12 instagram-pics-slide-outer">
                                        <div class="instagram-pics-slide">
                                            <div class="owl-carousel instagram-slider owl-btn-bottom-left light-next-prev">
                                            
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/1.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Haircut</span>
                                                            </a> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/2.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Hair Color</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/3.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Makeup</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/4.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Hair Style</span>
                                                            </a> 
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/5.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Makeup</span>
                                                            </a> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/6.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Makeup</span>
                                                            </a> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/7.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Hair Wash</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>  
                                                
                                                <div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="{{asset('users/images/8.jpg')}}" alt=""></div>
                                                        <div class="instagram-box-info  text-center">
                                                            <a href="javascript:;" class="text-white">
                                                                <i class="fa fa-instagram"></i>      
                                                                <span class="title-style-2">Makeup</span>
                                                            </a>
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
            <!-- INSTAGRAM FOLLOW SECTION END -->        
            
                           
        </div>
        <!-- CONTENT END -->

@stop
  