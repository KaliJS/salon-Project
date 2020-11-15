@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Salon Uses</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Create Retail Products</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add Retail Products</h3>
                  </div>
                  <div class="card-body p-6">

                          <div class="card-body">
                          <form class="form-horizontal" action="{{ route('retail-products.store') }}" method="POST">
                            @csrf

                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Product</label>
                              <div class="col-md-9">
                                <select class="form-control"  tabindex="-1" aria-hidden="true" name="product_id">
                                  <option selected disabled>Select</option>
                                  @foreach($products as $product)
                                  <option value="{{$product->id}}" {{$product->id==Request::old('product_id')?"selected":""}}>{{$product->description}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName"  class="col-md-3 form-label">MRP</label>
                              <div class="col-md-9">
                                <input type="number" value="{{Request::old('mrp_price')}}" class="form-control" id="inputDesignation" placeholder="MRP" name="mrp_price">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">SLP</label>
                              <div class="col-md-9">
                                <input type="number" value="{{Request::old('slp_price')}}" class="form-control" id="inputDesignation" placeholder="SLP" name="slp_price">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">IN Stock</label>
                              <div class="col-md-9">
                                <input type="number" value="{{Request::old('in_stock')}}" class="form-control" id="inputDesignation" placeholder="In Stock" name="in_stock">
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
  