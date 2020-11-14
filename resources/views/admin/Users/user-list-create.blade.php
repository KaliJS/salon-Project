@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Users</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Users</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->



            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{ route('users.store') }}" method="POST" >
                       @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">User Name</label>
                        <div class="col-md-9">
                          <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                          <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">DOB</label>
                        <div class="col-md-9">
                          <input type="date" name="dob" class="form-control" id="inputPassword3" placeholder="Date of Birth">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Gender</label>
                        <div class="col-md-9">
                          <select class="form-control " name="gender"  tabindex="-1" aria-hidden="true">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Note</label>
                        <div class="col-md-9">
                          <input type="text" name="note" class="form-control" id="inputDesignation" placeholder="Note">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Age</label>
                        <div class="col-md-9">
                          <input type="number" name="age"  class="form-control" id="inputEmplyeeId" placeholder="Age">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">GST Number</label>
                        <div class="col-md-9">
                          <input type="text" name="gst_no" class="form-control" id="inputDesignation" placeholder="GST Number">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 form-label">Anniversary</label>
                        <div class="col-md-9">
                          <input class="form-control" name="anniversary"  type="date" name="date">
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
            <!-- End Row-1 -->

         


         



          </div>
        </div>

@stop
  