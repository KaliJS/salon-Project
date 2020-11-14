<aside class="app-sidebar ps ps--active-y">
          <div class="app-sidebar__logo">
            <a class="header-brand" href="Vertical-IconSidedar-Light/index">
              <img src="{{ asset('images/logo.png') }}" class="header-brand-img desktop-lgo" alt="Admintro logo">
              <img src="{{ asset('images/logo1.png') }}" class="header-brand-img dark-logo" alt="Admintro logo">
              <img src="{{ asset('images/favicon.png') }}" class="header-brand-img mobile-logo" alt="Admintro logo">
              <img src="{{ asset('images/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
            </a>
          </div>
          <div class="app-sidebar__user active p-0">
            <div class="dropdown user-pro-body text-center">
              
            </div>
            
          </div>
          <ul class="side-menu app-sidebar3">
            
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#">
              <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>
              
              <span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/customers') }}" class="slide-item">Customers</a></li>
              </ul>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/todays-appointment') }}" class="slide-item">Today's Appointments</a></li>
              </ul>
            </li>
           

            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#">
              <i class="fa fa-dashboard side-menu__icon p-0"></i>
              <span class="side-menu__label">Dashboard User</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/dashboard-user') }}" class="slide-item">User List</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" href="{{ url('/admin/appointments') }}">
              <i class="fa fa-calendar side-menu__icon"></i>
              
              <span class="side-menu__label">Appointments</span></a>
              
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="Vertical-IconSidedar-Light/#">
              <i class="fa fa-bar-chart side-menu__icon"></i>
              <span class="side-menu__label">Sales</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/sales-invoices') }}" class="slide-item">Invoices</a></li>
                
                <li><a href="{{ url('/admin/sales-purchases') }}" class="slide-item">Purchases</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" href="{{ url('/admin/users') }}">
              <i class="fa fa-users side-menu__icon"></i>
              
              <span class="side-menu__label">Users</span></a>
              
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="Vertical-IconSidedar-Light/#">
              <i class="fa fa-gears side-menu__icon"></i>
              <span class="side-menu__label">Services</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/services') }}" class="slide-item">Services</a></li>
                
                <li><a href="{{ url('/admin/services-categories') }}" class="slide-item">Categories</a></li>
                <li><a href="{{ url('/admin/services-subcategories') }}" class="slide-item">Sub Categories</a></li>
                <li><a href="{{ url('/admin/services-presubcategories') }}" class="slide-item">Post Sub Categories</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="Vertical-IconSidedar-Light/#">
              <i class="fa fa-shopping-cart side-menu__icon"></i>
              <span class="side-menu__label">Products</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/products') }}" class="slide-item">Product</a></li>
                
                <li><a href="{{ url('/admin/products-categories') }}" class="slide-item">Category</a></li>
                <li><a href="{{ url('/admin/products-genrics') }}" class="slide-item">Genric Name</a></li>
                <li><a href="{{ url('/admin/products-brands') }}" class="slide-item">Brands</a></li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#">
              <i class="fa fa-edit side-menu__icon"></i>
              <span class="side-menu__label">Inventory</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/retail-products') }}" class="slide-item">Retail Products</a></li>
                <li><a href="{{ url('/admin/salon-uses') }}" class="slide-item">Salon uses</a></li>
                
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="Vertical-IconSidedar-Light/#">
              <i class="fa fa-user side-menu__icon"></i>
              <span class="side-menu__label">Staff Management</span><i class="angle fa fa-angle-right"></i></a>
              <ul class="slide-menu">
                <li><a href="{{ url('/admin/staff') }}" class="slide-item">staff</a></li>
                
                <li><a href="{{ url('/admin/staff-designation') }}" class="slide-item">Designation</a></li>
                <li><a href="{{ url('/admin/staff-skills') }}" class="slide-item">Skills</a></li>
                
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" href="{{ url('/admin/offers') }}">
              <i class="fa fa-gift side-menu__icon"></i>
              
              <span class="side-menu__label">Offers</span></a>
              
            </li>
            
          </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: -702px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 702px; height: 1012px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 415px; height: 597px;"></div></div></aside>