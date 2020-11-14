@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Staff Management</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
           
            
           
         <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Staff List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('staff.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Staffs</a>
                      </div>
                      
                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>
                              
                              <th>Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Email Id</th>
                          <th>Joining Date</th>
                          <th>Skills</th>
                          <th>Daily Worked Hours</th>
                          <th>Staff Report</th>
                              
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            

                            @foreach ($staffs as $staff)
                            <tr>
                              
                              <td class="text-nowrap align-middle">{{$staff->name}}</td>
                              <!-- <td class="text-nowrap align-middle">{{$staff->hsn}}</td>
                              <td class="text-nowrap align-middle">{{$staff->brand->name}}</td>
                              <td class="text-nowrap align-middle">{{$staff->category->name}}</td>
                              <td class="text-nowrap align-middle">{{$staff->genric->name}}</td>
                              <td class="text-nowrap align-middle">{{$staff->description}}</td> -->

                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('/admin/products/editProduct/'.$product->id) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ url('/admin/products/destroyProduct/'.$product->id) }}" method="POST">
                                  
                                      @csrf
                                      <button type="submit" class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

@stop
  