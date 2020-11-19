@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Invoices</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
          <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('sales-invoices.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Invoice</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Invoice Number</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Gender</th>
                          <th>GST Number</th>
                          <th>Services</th>
                          <th>Products</th>
                          <th>Amount</th>
                          <th>Offers</th>
                          <th>Payment Type</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($invoices as $invoice)
                        <tr>

                              <td class="text-nowrap align-middle">{{$invoice->id}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->customer->name}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->customer->address}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->customer->phone}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->customer->gender == 'F'?"Female":"Male"}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->customer->gst_no}}</td>
                              <td class="text-nowrap align-middle">
                                @foreach($invoice->services as $service)
                                    <span class="btn btn-primary">
                                        {{$service->service_description}}
                                    </span>
                                @endforeach
                              </td>
                              <td class="text-nowrap align-middle">
                                @foreach($invoice->products as $product)
                                    <span class="btn btn-primary">
                                        {{$product->description}}
                                    </span>
                                @endforeach
                              </td>
                              <td class="text-nowrap align-middle">{{$invoice->final_amount}}</td>
                              <td class="text-nowrap align-middle">{{$invoice->offers[0]->name}}</td>
                              
                              <td class="text-nowrap align-middle">{{$invoice->payment_type}}</td>

                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('sales-invoices.edit',$invoice) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ route('sales-invoices.destroy',$invoice) }}" method="POST">
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
                  <!-- table-responsive -->
                </div>
                </div>
              </div>



          </div>
        </div>

@stop
  