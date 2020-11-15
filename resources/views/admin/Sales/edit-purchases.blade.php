@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Purchases</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Edit Purchases</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Purchase</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal"  action="{{ route('sales-purchases.update',$sales_purchase) }}" method="POST">
                      
                      @method('PUT')
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Seller Name</label>
                        <div class="col-md-9">
                          <input type="text" name="seller_name" value="{{$sales_purchase->seller_name}}" class="form-control" id="inputName" placeholder="SellerName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                          <input type="text" name="address" value="{{$sales_purchase->address}}" class="form-control" id="inputName" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="number" name="phone" value="{{$sales_purchase->phone}}" class="form-control" id="phone" placeholder="Contact Number">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Products</label>
                        <div class="col-md-9">
                          <select multiple class="form-control"  tabindex="-1" aria-hidden="true" name="products[]">
                            @foreach($products as $product)
                            <option value="{{$product->id}}" {{in_array($product->id,$selected_products)?"selected":""}}>{{$product->description}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Quantity</label>
                        <div class="col-md-9">
                          <input type="number" name="quantity" value="{{$sales_purchase->quantity}}" class="form-control" id="inputPassword3" placeholder="Quantity">
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Price</label>
                        <div class="col-md-9">
                          <input type="number" name="price" value="{{$sales_purchase->price}}" class="form-control" id="inputDesignation" placeholder="Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">CGST</label>
                        <div class="col-md-9">
                          <input type="text" name="cgst" value="{{$sales_purchase->cgst}}" class="form-control" id="inputEmplyeeId" placeholder="CGST">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">SGST</label>
                        <div class="col-md-9">
                          <input type="text" name="sgst" value="{{$sales_purchase->sgst}}" class="form-control" id="inputEmplyeeId" placeholder="SGST">
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
  