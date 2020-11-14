@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Appointments</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
           
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Appointments List</h3>
                  </div>
                  <div class="card-body">
                  <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('appointments/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Appointment</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th>Mobile Number</th>
                          <th>Service Type</th>
                          <th>Time and Date</th>
                          <th>Stylist Name</th>
                          <th>Service Time</th>
                          <th>Gender</th>
                          <th>Note</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                  <!-- table-responsive -->
                </div>
                </div>
              </div>

         



          </div>
        </div>

@stop
  