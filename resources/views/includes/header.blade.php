
            <!--app header-->
            <div class="app-header header">
              <div class="container-fluid">
                <div class="d-flex">
                  <a class="header-brand" href="Vertical-IconSidedar-Light/index">
                    <img src="{{asset('users/images/logo-obw1.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo" style=" height: 4.5rem; margin-top: -13px;">
                    <img src="{{asset('users/images/logo-obw1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
                    <img src="{{asset('users/images/logo-obw1.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
                    <img src="{{asset('users/images/logo-obw1.png')}}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
                  </a>

                  <div class="app-sidebar__toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="Vertical-IconSidedar-Light/#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left header-icon mt-1"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg>
                    </a>
                  </div>
                  <div class="mt-1">
                    
                  </div><!-- SEARCH -->


                  

                  <div class="d-flex order-lg-2 ml-auto">
                    
                    <div class="dropdown   header-fullscreen">
                      <a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"></path></svg>
                      </a>
                    </div>
                    
                    <div class="dropdown profile-dropdown">
                      <a href="Vertical-IconSidedar-Light/#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span>
                          <i class="fa fa-user avatar avatar-md brround" ></i>
                        </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="text-center">
                          <a href="Vertical-IconSidedar-Light/#" class="dropdown-item text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
                          
                          <div class="dropdown-divider"></div>
                        </div>
                        
                        <a class="dropdown-item d-flex" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                          <svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"></path></g></svg>
                          <div class="">{{ __('Logout') }}
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>