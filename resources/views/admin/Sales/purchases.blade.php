@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Purchases</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
        <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Purchases List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('sales/create-purchase') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Purchase</a>
                      </div>
                      
                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>
                              <th>Seller Name</th>
                              <th>Address</th>
                              <th>Contact Number</th>
                              <th>Products</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>CGST</th>
                              <th>SGST</th>
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              
                              
                              <td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
                              <td class="text-nowrap align-middle"><span>10 July 2020</span></td>
                              
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('sales/edit-purchase') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              
                              
                              <td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
                              <td class="text-nowrap align-middle"><span>10 July 2020</span></td>
                              
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('sales/edit-purchase') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash mr-2"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              
                              
                              <td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
                              <td class="text-nowrap align-middle"><span>10 July 2020</span></td>
                              
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                25 July 2021
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td class="text-nowrap align-middle">
                                Daneil Robert
                              </td>
                              <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('sales/edit-purchase') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash mr-2"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Row -->



          </div>
        </div>

@stop
  