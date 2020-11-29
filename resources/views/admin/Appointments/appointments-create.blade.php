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
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Appointments</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Appointment</a></li>

                </ol>
              </div>

            </div>
            <!--End Page header-->

             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Appointment</h4>
                  </div>
                  <div class="card-body">
                  <form class="form-horizontal" action="{{route('appointments.store')}}" method="POST" onsubmit="return checkStylist()">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Customer</label>
                        <div class="col-md-9">
                          <select name="customer_id" id="customer_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row hidden customerDetails">
                        <label class="col-md-3 form-label">Gender</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="gender" disabled>
                        </div>
                      </div>
                      <div class="form-group row hidden customerDetails">
                        <label for="inputName" class="col-md-3 form-label">Contact Number</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="phone" disabled>
                        </div>
                      </div>

                      <div class="form-group row hidden customerDetails">
                        <label for="inputName" class="col-md-3 form-label">Note</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="note" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-label">Date</label>
                        <div class="col-md-9">
                          <input class="form-control date" type="date" name="date" required>
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

                      <div class="service_details">

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
            $(document).on("change","#customer_id",function(){
                const customer_id=$(this).val();
                $.ajax({
                    url:`getCustomerData?customer_id=${customer_id}`
                }).then(response=>{
                    if(response){
                        $(".customerDetails").removeClass("hidden");
                        $("#gender").val(response.gender);
                        $("#phone").val(response.phone);
                        if(response.note){
                            $("#note").val(response.note);
                        }else{
                            $("#note").parent().parent().addClass("hidden");
                        }
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            $(document).on("change","#services",function(){
                const checkDate=$("input[name=date]").val();
                
                if(!checkDate){
                    $('#services').val('');
                    alert("Please select date!");
                    return;
                }
                const date=$("input[name=date]").val();
                const service_ids=$(this).val();
                console.log(service_ids);
                $.ajax({
                    method:'POST',
                    url:`getServiceData`,
                    data:{service_ids,date,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    $(".service_details").html(response);
                    $("select").select2();
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            // $(document).on("change",".stylist_name",function(){
            //     const me=$(this);
            //     const stylist_id=me.val();
            //     const id=me.parent().parent().attr("id");
            //     const date=$("input[name=date]").val();
            //     if(!date){
            //         alert("Please select date!");
            //         return;
            //     }
            //     $.ajax({
            //         method:'POST',
            //         url:`getStylistData`,
            //         data:{stylist_id,date,"_token":"{{csrf_token()}}"}
            //     }).then(response=>{
            //         console.log('id',id);
            //         $(`#${id} .bookedButtons`).html(response);
            //     }).fail(error=>{
            //         console.log('error',error);
            //     });
            // });




            $(document).on("change",".time",function(){

                const checkDate=$("input[name=date]").val();
                
                if(!checkDate){
                    $('.time').val('');
                    alert("Please select date!");
                    return;
                }

                
                const time=$(this).val();
                
                const date=$("input[name=date]").val(); 
                const service_id=$(this).attr('id');

                $.ajax({
                    method:'POST',
                    url:`checkAppointmentBooked`,
                    data:{service_id,date,time,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                  console.log(`#service_id${service_id}`);
                  $(`#service_id${service_id}`).removeAttr('disabled');
                  $(`#service_id${service_id}`).html(response);

                }).fail(error=>{
                    console.log('error',error);
                });
            });


            function checkStylist(){
              var returning=true;
              $('.stylist_name').each(function(i, obj) { 
                if(!$(this).val()){
                  returning = false;
                }
               });
              if(!returning){
                alert("Please select the stylist!");
              }
              return returning;
            }

            $(document).on("change",".date",function(){
                $('.time').val('');
            });
            
        </script>

@stop
