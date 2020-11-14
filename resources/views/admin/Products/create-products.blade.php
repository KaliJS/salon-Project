@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Products</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add Products</h3>
                  </div>
                  <div class="card-body p-6">

                          <div class="card-body">
                          <form class="form-horizontal" action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                              <label for="inputName"  class="col-md-3 form-label">IDH No</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('idh_no')}}" class="form-control" id="inputDesignation" placeholder="IDH No" name="idh_no">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">HSN</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('hsn')}}" class="form-control" id="inputDesignation" placeholder="HSN" name="hsn">
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Brand</label>
                              <div class="col-md-9">
                                <select class="form-control"  tabindex="-1" aria-hidden="true" name="brand_id">
                                  <option selected disabled>Select</option>
                                  @foreach($brands as $brand)
                                  <option value="{{$brand->id}}" {{$brand->id==Request::old('brand_id')?"selected":""}}>{{$brand->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Category</label>
                              <div class="col-md-9">
                                <select class="form-control"  tabindex="-1" aria-hidden="true" name="category_id">
                                  <option selected disabled>Select</option>
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}" {{$category->id==Request::old('category_id')?"selected":""}}>{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Genric Name</label>
                              <div class="col-md-9">
                                <select class="form-control"  tabindex="-1" aria-hidden="true" name="genric_name_id">
                                  <option selected disabled>Select</option>
                                  @foreach($genrics as $genric)
                                  <option value="{{$genric->id}}" {{$genric->id==Request::old('genric_name_id')?"selected":""}}>{{$genric->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            
                            
                            <div class="form-group row">
                              <label for="inputName" value="{{Request::old('description')}}" class="col-md-3 form-label">Product Description</label>
                              <div class="col-md-9">
                                <textarea name="description" class="form-control" placeholder="Enter Description">{{Request::old('description')}}</textarea>                              
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
  