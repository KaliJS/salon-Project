@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Staff Management</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Staff</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add Staff</h3>
                  </div>
                  <div class="card-body p-6">

                          <div class="card-body">
                          <form class="form-horizontal" action="{{ route('staff.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                              <label for="inputName"  class="col-md-3 form-label">Name</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('name')}}" class="form-control" id="inputDesignation" placeholder="Name" name="name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Address</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('address')}}" class="form-control" id="inputDesignation" placeholder="Address" name="address">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('phone')}}" class="form-control" id="inputDesignation" placeholder="Contact Number" name="phone">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Email Id</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('email')}}" class="form-control" id="inputDesignation" placeholder="Email" name="email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Joining Date</label>
                              <div class="col-md-9">
                                <input type="date" value="{{Request::old('doj')}}" class="form-control" id="inputDesignation" placeholder="Joining Date" name="doj">
                              </div>
                            </div>

                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Skills</label>
                              <div class="col-md-9">
                                <select multiple class="form-control"  tabindex="-1" aria-hidden="true" name="skills[]">
                                  @foreach($skills as $skill)
                                  <option value="{{$skill->id}}" {{$skill->id==Request::old('skill_id')?"selected":""}}>{{$skill->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Designation</label>
                              <div class="col-md-9">
                                <select class="form-control"  tabindex="-1" aria-hidden="true" name="designation_id">
                                  <option selected disabled>Select</option>
                                  @foreach($designations as $designation)
                                  <option value="{{$designation->id}}" {{$designation->id==Request::old('designation_id')?"selected":""}}>{{$designation->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Employee Id</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('employee_id')}}" class="form-control" id="inputDesignation" placeholder="Employee Id" name="employee_id">
                              </div>
                            </div>
                            
                            

                            <div class="form-group mb-0 mt-4 row justify-content-end">
                              <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Create</button>
                                
                              </div>
                            </div>
                          </form>
                        </div>
                      
                  </div>
                </div>
              </div>
            </div>

         


         



          </div>
        </div>

@stop
  