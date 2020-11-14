@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Salon Uses</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Edit Retail Products</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Retail Product</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">IDH No</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputName" placeholder="IDH No">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">HSN</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="phone" placeholder="HSN">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Brand</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Brand">
                        </div>
                      </div>
                      
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Category</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>cat1</option>
                            <option>cat2</option>
                            <option>cat3</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Genric Name</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>gen1</option>
                            <option>gen2</option>
                            <option>gen3</option>
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Product Description</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputDesignation" placeholder="Product Description">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">MRP</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputEmplyeeId" placeholder="MRP">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">SLP</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="inputEmplyeeId" placeholder="SLP">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">In Stock</label>
                        <div class="col-md-9">
                          <select class="form-control " tabindex="-1" aria-hidden="true">
                            <option>Yes</option>
                            <option>No</option>
                            
                          </select>
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
  