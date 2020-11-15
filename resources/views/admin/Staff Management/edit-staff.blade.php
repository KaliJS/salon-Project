@extends('layouts.admin')

@section('content')


            <!--/app header-->
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Staff Management</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit Staff</a></li>

                </ol>
              </div>

            </div>
            <!--End Page header-->

             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Edit Staff</h4>
                  </div>
                  <div class="card-body p-6">

                    <div class="card-body">
                    <form class="form-horizontal" action="{{ route('staff.update',$staff) }}" method="POST">
                      @method('PUT')
                      @csrf
                      <div class="form-group row">
                        <label for="inputName"  class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                          <input type="text" value="{{$staff->name}}" class="form-control" id="inputDesignation" placeholder="Name" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                          <input type="text" value="{{$staff->address}}" class="form-control" id="inputDesignation" placeholder="Address" name="address">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="text" value="{{$staff->phone}}" class="form-control" id="inputDesignation" placeholder="Contact Number" name="phone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Email Id</label>
                        <div class="col-md-9">
                          <input type="text" value="{{$staff->email}}" class="form-control" id="inputDesignation" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Joining Date</label>
                        <div class="col-md-9">
                          <input type="date" value="{{$staff->doj}}" class="form-control" id="inputDesignation" placeholder="Joining Date" name="doj">
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Skills</label>
                        <div class="col-md-9">
                          <select multiple class="form-control"  tabindex="-1" aria-hidden="true" name="skills[]">
                            @foreach($skills as $skill)
                            <option value="{{$skill->id}}" {{in_array($skill->id,$selected_skills)?"selected":""}}>{{$skill->name}}</option>
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
                            <option value="{{$designation->id}}" {{$designation->id==$staff->designation_id?"selected":""}}>{{$designation->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Employee Id</label>
                        <div class="col-md-9">
                          <input type="text" value="{{$staff->employee_id}}" class="form-control" id="inputDesignation" placeholder="Employee Id" name="employee_id">
                        </div>
                      </div>



                      <div class="form-group mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                          <button type="submit" class="btn btn-primary">Update</button>

                        </div>
                      </div>
                    </form>
                  </div>

            </div>
                </div>
              </div>

            </div>
            <!-- End Row-1 -->








          </div>
        </div>

@stop
