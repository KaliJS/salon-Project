@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Offers</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit Offers</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Offers</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Offer Name</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputName" placeholder="Offer Name">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Discription</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputService" placeholder="Discription">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Services</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputPassword3" placeholder="Services">
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Discount Percentage</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputNote" placeholder="Discount Percentage">
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
  