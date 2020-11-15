@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="angle fa fa-angle-right mr-2"></i>Inventory</a></li>
                  <li class="breadcrumb-item"><a href="#">Salon Uses</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          
          <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Salon Uses List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('salon-uses.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Salon Uses Product</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>IDH No</th>
                          <th>HSN</th>
                          <th>Brand</th>
                          <th>Category</th>
                          <th>Generic Name</th>
                          <th>Product Discription</th>
                          
                          <th>In Stock</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($salonUses as $salonUse)
                            <tr>
                              
                              <td class="text-nowrap align-middle">{{$salonUse->product->idh_no}}</td>
                              <td class="text-nowrap align-middle">{{$salonUse->product->hsn}}</td>
                              <td class="text-nowrap align-middle">{{$salonUse->product->brand->name}}</td>
                              <td class="text-nowrap align-middle">{{$salonUse->product->category->name}}</td>
                              
                              <td class="text-nowrap align-middle">{{$salonUse->product->genric->name}}</td>
                              <td class="text-nowrap align-middle">{{$salonUse->product->description}}</td>
                              
                              <td class="text-nowrap align-middle">{{$salonUse->in_stock}}</td>
                             

                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('/admin/salon-uses/editSalonUse/'.$salonUse->id) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ url('/admin/salon-uses/destroySalonUse/'.$salonUse->id) }}" method="POST">
                                  
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
                  <!-- table-responsive -->
                </div>
                </div>
              </div>




          </div>
        </div>

@stop
  