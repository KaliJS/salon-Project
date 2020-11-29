@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Dashboard</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
            
           

            <!-- Row-2 -->
            <div class="row">
              

              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0">
                  <div class="card-body">
                    <p class=" mb-1 ">Total Appointments</p>
                    <h2 class="mb-1 number-font">{{$total_appointments}}</h2>
                  </div>
                  <div id="spark1"></div>
                </div>
              </div>


              
            </div>
            <!-- End Row-2 -->

         



          </div>
        </div>

@stop
  