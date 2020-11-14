@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="angle fa fa-angle-right mr-2"></i>Inventory</a></li>
                  <li class="breadcrumb-item"><a href="#">Salon Uses</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          
         <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Salon Uses List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('inventory/create-salon-uses') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Salon Uses</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>IDH No</th>
                          <th>HSN</th>
                          <th>Brand</th>
                          <th>Category</th>
                          <th>Generic Name</th>
                          <th>Product Discription</th>
                          <th>In Stock</th>
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
                        </tr>
                        
                        <tr>
                          <td>Joan Powell</td>
                          <td>42342342</td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          
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
  