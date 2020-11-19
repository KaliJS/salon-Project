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
                  <li class="breadcrumb-item"><a href="#">Edit Invoice</a></li>  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Invoice</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{route('sales-invoices.update',$sales_invoice)}}" method="POST">
                     @method('PUT')
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Customer</label>
                        <div class="col-md-9">
                          <select name="customer_id" id="customer_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}" {{$sales_invoice->customer_id==$customer->id?'selected':''}}>{{$customer->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="customer_details">
                        <div class="form-group row customerDetails">
                          <label for="inputName" class="col-md-3 form-label">Address</label>
                          <div class="col-md-9">
                            <input type="text" value="{{$sales_invoice->customer->address}}" class="form-control" id="address" disabled>
                          </div>
                        </div>
                        <div class="form-group row customerDetails">
                          <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                          <div class="col-md-9">
                            <input type="number" value="{{$sales_invoice->customer->phone}}" class="form-control" id="phone" disabled>
                          </div>
                        </div>
                        <div class="form-group row customerDetails">
                          <label for="inputName" class="col-md-3 form-label">Gender</label>
                          <div class="col-md-9">
                            <input type="text" value="{{$sales_invoice->customer->gender=='M'?'Male':'Female'}}" class="form-control" id="gender" disabled>
                          </div>
                        </div>
                        <div class="form-group row customerDetails">
                          <label for="inputEmail3" class="col-md-3 form-label">GST Number</label>
                          <div class="col-md-9">
                            <input type="text" value="{{$sales_invoice->customer->gst_no}}" class="form-control" id="gst_no" disabled>
                          </div>
                        </div>
                    </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Service</label>
                        <div class="col-md-9">
                            <select name="services[]" id="services" class="form-control" multiple required>
                                @foreach($services as $service)
                                  <option value="{{$service->id}}" {{in_array($service->id,$selected_services)?"selected":""}}>{{$service->service_description}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Product</label>
                        <div class="col-md-9">
                            <select name="products[]" id="sproduct" class="form-control" multiple >
                                 @foreach($products as $product)
                                  <option value="{{$product->id}}" {{in_array($product->id,$selected_products)?"selected":""}}>{{$product->description}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group row quantity_no">
                        <label for="inputPassword3" class="col-md-3 form-label">Quantity</label>
                        <div class="col-md-9">
                          <input type="number" value="{{$sales_invoice->quantity}}" name="quantity" class="form-control" id="inputQuantity" placeholder="Quantity">
                        </div>
                      </div>
                      
                      <div class="my-3 text-center calculateAmount">
                        <div>
                          <button type="button" class="btn btn-success">Calculate Amount</button>
                          
                        </div>
                      </div>

                      <div class="amountDetails">
                        

                          <div class="form-group row  totalAmount">
                            <label for="inputPassword3" class="col-md-3 form-label"><strong>Initial Amount :</strong><p>(before discounts)</p></label>
                            <div class="col-md-9">
                              <input type="number" class="form-control" value="{{$sales_invoice->total_amount}}" name="total_amount" id="totalAmount" placeholder="Stylist Name" readonly>
                            </div>
                          </div>
                          <div class="form-group row totalAmount">
                            <label for="inputPassword3" class="col-md-3 form-label"><strong>Total Amount: </strong></label>
                            <div class="col-md-9">
                              <input type="number" class="form-control" style="background-color: #705ec8;color: white;font-weight: 700;" value="{{$sales_invoice->final_amount}}" name="final_amount" id="totalAmount" placeholder="Stylist Name" readonly>
                            </div>
                          </div>


                      </div>

                      
                      
                      
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Payment Type</label>
                        <div class="col-md-9">
                          <select class="form-control" name="payment_type" tabindex="-1" aria-hidden="true">
                            <option value="" selected disabled>Select</option>
                            <option value="Cash" {{$sales_invoice->payment_type=='Cash'?'selected':''}}>Cash</option>
                            <option value="Credit Card" {{$sales_invoice->payment_type=='Credit Card'?'selected':''}}>Credit Card</option>
                            <option value="Debit Card" {{$sales_invoice->payment_type=='Debit Card'?'selected':''}}>Debit Card</option>
                            <option value="Upi" {{$sales_invoice->payment_type=='Upi'?'selected':''}}>Upi</option>
                            <option value="Wallet" {{$sales_invoice->payment_type=='Wallet'?'selected':''}}>Wallet</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group mb-0 mt-4 row justify-content-end ">
                        <div class="col-md-9">
                          <button type="submit" class="btn btn-primary updateHandler">Update</button>
                          
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
            $(document).on("change","#customer_id",function(){
                const customer_id=$(this).val();
                
                $.ajax({
                    url:`/admin/sales-invoices/getCustomerData?customer_id=${customer_id}`
                }).then(response=>{
                    if(response){
                      console.log(response);
                        $(".customerDetails").removeClass("hidden");
                        $(".quantity_no").removeClass("hidden");
                        $("#address").val(response.address);                       
                        $("#phone").val(response.phone);
                        $("#gender").val(response.gender);
                        $("#gst_no").val(response.gst_no);
                        
                    }
                    else{
                      console.log('no data');
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });


            $(document).on("click",".calculateAmount",function(){
                const me=$('#inputQuantity').val();
                const service_ids=$("#services").val();
                
                $.ajax({
                    method:'POST',
                    url:`/admin/sales-invoices/getAmountData`,
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
            $(document).on("click",".updateHandler",function(e){
              
              if(!$('.calculateAmount').hasClass('hidden')){
                alert('Please Calculate Total amount first');
                e.preventDefault();
              }
            });

            $(document).on("change","#services",function(e){
              $('.calculateAmount').removeClass('hidden');
            });
        </script>

@stop  