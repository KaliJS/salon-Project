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
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Products List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Products</a>
                      </div>
                      
                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>
                              
                              <th>IDH No</th>
                              <th>HSN</th>
                              <th>Brand</th>
                              <th>Category</th>
                              <th>Genric Name</th>
                              <th>Product Description</th>
                              
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            

                            @foreach ($products as $product)
                            <tr>
                              
                              <td class="text-nowrap align-middle">{{$product->idh_no}}</td>
                              <td class="text-nowrap align-middle">{{$product->hsn}}</td>
                              <td class="text-nowrap align-middle">{{$product->brand->name}}</td>
                              <td class="text-nowrap align-middle">{{$product->category->name}}</td>
                              <td class="text-nowrap align-middle">{{$product->genric->name}}</td>
                              <td class="text-nowrap align-middle">{{$product->description}}</td>

                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('/admin/products/editProduct/'.$product->id) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ url('/admin/products/destroyProduct/'.$product->id) }}" method="POST" onsubmit="return confirm('Are you sure , you want to delete this?')">
                                  
                                      @csrf
                                      <button type="submit" class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
           
            

          </div>
        </div>

@stop
  