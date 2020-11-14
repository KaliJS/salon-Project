@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit Services</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Service</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal">
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Gender</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Select Pre Subcategory</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>presub1</option>
                                  <option>presub2</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Select Subcategory</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>subcat1</option>
                                  <option>subcat2</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Add price with CGST and SGST 18%</label>
                              <div class="col-md-9">
                                <input type="number" class="form-control" id="inputName" placeholder="Add price with CGST and SGST 18%">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 form-label">Time</label>
                              <div class="col-md-9">
                                <input class="form-control" type="time" name="time">
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Description</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="inputDesignation" placeholder="Description">
                              </div>
                            </div>

                            <div class="form-group row">
                            <div class="form-label col-md-3">Images</div>
                            <div class="custom-file col-md-9">
                              <input type="file" class="custom-file-input" name="example-file-input-custom">
                              <label class="custom-file-label">Choose file</label>
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
  