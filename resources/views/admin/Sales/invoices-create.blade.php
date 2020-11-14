@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Invoice</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Invoice</h4>
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
                          <input type="text" class="form-control" id="inputName" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="phone" placeholder="Contact Number">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Gender</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">GST Number</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputService" placeholder="GST Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Services/Products</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputService" placeholder="Services/Products">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Amount</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="inputPassword3" placeholder="Stylist Name">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Quantity</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="inputPassword3" placeholder="Quantity">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Offers</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputNote" placeholder="Offers">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Payment Type</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>Cash</option>
                            <option>Credit Card</option>
                            <option>Debit</option>
                            <option>Upi</option>
                            <option>Wallet</option>
                          </select>
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
  