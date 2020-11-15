@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Purchases</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
        <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Purchases List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('sales-purchases.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Purchase</a>
                      </div>
                      
                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>
                              <th>Seller Name</th>
                              <th>Address</th>
                              <th>Contact Number</th>
                              <th>Products</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>CGST</th>
                              <th>SGST</th>
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($purchases as $purchase)
                            <tr>

                              <td class="text-nowrap align-middle">{{$purchase->seller_name}}</td>
                              <td class="text-nowrap align-middle">{{$purchase->address}}</td>
                              <td class="text-nowrap align-middle">{{$purchase->phone}}</td>
                              <td class="text-nowrap align-middle">
                                @foreach($purchase->products as $product)
                                    <span class="btn btn-primary">
                                        {{$product->description}}
                                    </span>
                                @endforeach
                              </td>
                              <td class="text-nowrap align-middle">{{$purchase->quantity}}</td>
                              <td class="text-nowrap align-middle">{{$purchase->price}}</td>
                              <td class="text-nowrap align-middle">{{$purchase->cgst}}</td>
                              <td class="text-nowrap align-middle">{{$purchase->sgst}}</td>
                              
                              
                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('sales-purchases.edit',$purchase) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ route('sales-purchases.destroy',$purchase) }}" method="POST">
                                      @method('DELETE')
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
            <!-- End Row -->



          </div>
        </div>

@stop
  