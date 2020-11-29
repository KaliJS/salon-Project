@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Users</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit User</a></li>
                  
                </ol>
              </div>
              
            </div>
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Client</h4>
                  </div>
                  <div class="card-body">
                    
                      <form action="{{ url('updateCustomer/'.$customers->id) }}" method="POST">
                      @csrf
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">User Name</label>
                        <div class="col-md-9">
                          <input type="text" name="name" value="{{$customers->name}}" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                          <input type="text" name="address" value="{{$customers->address}}" class="form-control" id="inputEmail3" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="number" name="phone" value="{{$customers->phone}}" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">DOB</label>
                        <div class="col-md-9">
                          <input type="date" name="dob" value="{{$customers->dob}}" class="form-control" id="inputPassword3" placeholder="Date of Birth">
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
                          <input type="text" name="note" value="{{$customers->note}}" class="form-control" id="inputDesignation" placeholder="Note">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Age</label>
                        <div class="col-md-9">
                          <input type="number" name="age" value="{{$customers->age}}" class="form-control" id="inputEmplyeeId" placeholder="Age">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">GST Number</label>
                        <div class="col-md-9">
                          <input type="text" name="gst_no" value="{{$customers->gst_no}}" class="form-control" id="inputDesignation" placeholder="GST Number">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 form-label">Anniversary</label>
                        <div class="col-md-9">
                          <input class="form-control" value="{{$customers->anniversary}}" name="anniversary"  type="date" name="date">
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
  