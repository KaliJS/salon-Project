@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="angle fa fa-angle-right mr-2"></i>Inventory</a></li>
                  <li class="breadcrumb-item"><a href="#">Retail Products</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          
         <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Retail Products List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('inventory/create-retail-product') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Retail Product</a>
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
                          <th>MRP</th>
                          <th>SLP</th>
                          <th>In Stock</th>
                          <th>Options</th>
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
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('inventory/edit-retail-product') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
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
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('inventory/edit-retail-product') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
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
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('inventory/edit-retail-product') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
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
  