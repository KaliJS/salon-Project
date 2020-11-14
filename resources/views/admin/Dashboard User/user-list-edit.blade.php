@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Dashboard User</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit User</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update User</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">User Name</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Phone Number</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Permission</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>Appointment</option>
                            <option>Inventory</option>
                            <option>Accounts</option>
                            <option>Staff Management</option>
                            <option>Services</option>
                            <option>Users/Customer</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Designation</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputDesignation" placeholder="Designation">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Employee ID</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputEmplyeeId" placeholder="Employee Id">
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
            <!-- End Row-1 -->

         



          </div>
        </div>

@stop
  