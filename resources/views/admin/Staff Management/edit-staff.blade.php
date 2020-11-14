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
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Staff</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="phone" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="phone" placeholder="Contact Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Email Id</label>
                        <div class="col-md-9">
                          <input type="Email" class="form-control" id="inputService" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-label">Joining Date</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" name="date">
                        </div>
                      </div>
                      
                    
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Skills </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputPassword3" placeholder="Skills">
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Designation</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputNote" placeholder="Designation">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Employee</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputNote" placeholder="Employee">
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
  