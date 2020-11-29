@extends('layouts.admin')

@section('content')

		

    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pdfmaker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jszip.min.js')}}"></script>


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
                    <div  id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                      <div class="row">
                        <div class="col-sm-12 col-md-6">
                          <div class="dt-buttons btn-group">
                               
                          </div>
                        </div>
                      </div>

                      <div class="table-responsive">
                        <table  id="example" class="table table-bordered text-nowrap key-buttons dataTable no-footer dtr-inline" role="grid" aria-describedby="example_info" style="width: 1152px;">
                          <thead>
                            <tr role="row">
                              
                              <th class="border-bottom-0 sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 172.889px;" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Invoice Number</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending" >Name</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Address</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Contact Number</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Gender</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">GST Number</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Services</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Products</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Amount</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Offers</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Payment Type</th>
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach($invoices as $invoice)
                            <tr role="row" class="odd">

                                  <td tabindex="0" class=" sorting_1 text-nowrap align-middle">{{$invoice->id}}</td>
                                  <td>{{$invoice->customer->name}}</td>
                                  <td>{{$invoice->customer->address}}</td>
                                  <td>{{$invoice->customer->phone}}</td>
                                  <td>{{$invoice->customer->gender == 'F'?"Female":"Male"}}</td>
                                  <td>{{$invoice->customer->gst_no}}</td>
                                  <td>
                                    @foreach($invoice->services as $service)
                                        <span class="btn btn-primary">
                                            {{$service->service_description}}
                                        </span>
                                    @endforeach
                                  </td>
                                  <td>
                                    @foreach($invoice->products as $product)
                                        <span class="btn btn-primary">
                                            {{$product->description}}
                                        </span>
                                    @endforeach
                                  </td>
                                  <td>{{$invoice->final_amount}}</td>
                                  <td>{{$invoice->offers[0]->name}}</td>
                                  
                                  <td>{{$invoice->payment_type}}</td>

                                  <td>
                                    <div class="btn-group">
                                      <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                      <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="{{ route('sales-invoices.edit',$invoice) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                        <form action="{{ route('sales-invoices.destroy',$invoice) }}" method="POST" onsubmit="return confirm('Are you sure , you want to delete this?')">
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




                  <!-- table-responsive -->
                </div>
                </div>
              </div>



          </div>
        </div>

@stop
  