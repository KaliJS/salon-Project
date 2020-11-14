@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Invoices</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('sales/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Invoice</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Invoice Number</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Gender</th>
                          <th>GST Number</th>
                          <th>Services/Products</th>
                          <th>Amount</th>
                          <th>Offers</th>
                          <th>Payment Type</th>
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
  