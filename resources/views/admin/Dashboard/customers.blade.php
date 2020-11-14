@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="angle fa fa-angle-right mr-2"></i>Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Customers</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          
         <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Customer List</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email Id</th>
                          <th>Designation</th>
                          <th>Employee Id</th>
                          <th>Permission</th>
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
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- table-responsive -->
                </div>
                </div>
              </div>



          </div>
        </div>

@stop
  