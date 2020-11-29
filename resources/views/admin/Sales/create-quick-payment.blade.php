@extends('layouts.admin')

@section('css')

<style>
    .bookedButtons{
        display: flex;
        justify-content: center;
        width: 100%;
        margin: 1%;
        align-items: center;
    }
    .bookedButtons button{
        margin:1%;
    }
</style>

@stop

@section('content')
    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Sales</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Payment</a></li>  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Payment</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{route('quick-payments.store')}}" method="POST">
                      @csrf
                     
                      <div class="form-group row customerDetails">
                        <label for="inputName" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" id="address" placeholder="Name">
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Service</label>
                        <div class="col-md-9">
                            <select name="services[]" id="services" class="form-control" multiple required>
                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->service_description}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Product</label>
                        <div class="col-md-9">
                            <select name="products[]" id="sproduct" class="form-control" multiple required>
                                @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->description}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group row quantity_no">
                        <label for="inputPassword3" class="col-md-3 form-label">Quantity</label>
                        <div class="col-md-9">
                          <input type="number" name="quantity" class="form-control" id="inputQuantity" placeholder="Quantity">
                        </div>
                      </div>
                      
                      <div class="my-3 text-center calculateAmount hidden">
                        <div>
                          <button type="button" class="btn btn-success">Calculate Amount</button>
                          
                        </div>
                      </div>

                      <div class="amountDetails">
                        
                      </div>

                      
                      
                      
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Payment Type</label>
                        <div class="col-md-9">
                          <select class="form-control" name="payment_type" tabindex="-1" aria-hidden="true">
                            <option value="" selected disabled>Select</option>
                            <option value="Cash">Cash</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="Upi">Upi</option>
                            <option value="Wallet">Wallet</option>
                          </select>
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
            <!-- End Row-1 -->


          </div>
        </div>

@stop
  
@section('js')

        <script type="text/javascript">
            
            $(document).on("click",".calculateAmount",function(){
                const me=$('#inputQuantity').val();
                const service_ids=$("#services").val();
                
                $.ajax({
                    method:'POST',
                    url:`getAmountData`,
                    data:{service_ids,me,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    
                    $('.amountDetails').html(response);
                    $('.calculateAmount').addClass('hidden');
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            $(document).on("change","#inputQuantity",function(){
                $('.calculateAmount').removeClass('hidden');
            });
        </script>

@stop  