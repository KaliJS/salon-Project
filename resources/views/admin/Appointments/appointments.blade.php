@extends('layouts.admin')

@section('content')


            <!--/app header-->
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Appointments</a></li>

                </ol>
              </div>

            </div>
            <!--End Page header-->


            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Appointments List</h3>
                  </div>
                  <div class="card-body">
                  <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Appointment</a>
                      </div>

                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>

                          <th>Name</th>
                          <th>Mobile Number</th>

                          <th>Service Date</th>
      
                          <th>Gender</th>
                          <th>Note</th>
                          <th>Services Selected</th>
                          <th>Status</th>

                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($appointments as $appointment)
                        <tr>
                          <td>{{$appointment->customer->name}}</td>
                          <td>{{$appointment->customer->phone}}</td>

                          

                          <td>{{$appointment->date}}</td>

                          <td>{{$appointment->customer->gender}}</td>
                          <td>{{$appointment->customer->note}}</td>

                          <td> 
                            @foreach($appointment->appointments_details as $detail)
                            <ul>
                              <li>Service Type: {{$detail->service->service_description}}</li>
                              <li>Service Time: {{$detail->time}}</li>
                              <li>Stylist Name: {{$detail->staff->name}}</li>
                              
                            </ul>
                             
                            @endforeach
                          </td>
                          
                          
                          <td id="updateMessage{{$appointment->id}}">
                            {{$appointment->status_name}}
                         
                          </td>
                          <td>
                            <div class="btn-group">
                              <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                              <div class="dropdown-menu" style="">
                                <button class="dropdown-item completeAppointment" type="button" id="{{$appointment->id}}" href=""><i class="fa fa-check-circle mr-2"></i> Completed</button>

                                <button class="dropdown-item cancelAppointment" type="button" id="{{$appointment->id}}" href=""><i class="fa fa-close mr-2"></i> Cancel</button>

                                <a class="dropdown-item" href="{{ route('appointments.edit',$appointment) }}"><i class="fa fa-edit mr-2"></i> Re-Schedule</a>
                                <form action="{{ route('appointments.destroy',$appointment) }}" method="POST">
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


@section('js')

        <script type="text/javascript">
            

            $(document).on("click",".cancelAppointment",function(){
                const id=this.id;
                
                $.ajax({
                    method:'POST',
                    url:`/admin/appointments/cancelAppointment`,
                    data:{id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                  if(response == 'success'){
                    $('#updateMessage'+id).text('Cancelled');
                    alert('Update Successfully');
                  }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            $(document).on("click",".completeAppointment",function(){
                const id=this.id;
                
                $.ajax({
                    method:'POST',
                    url:`/admin/appointments/completeAppointment`,
                    data:{id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                  if(response == 'success'){
                    $('#updateMessage'+id).text('Completed');
                    alert('Update Successfully');
                  }
                }).fail(error=>{
                    console.log('error',error);
                });
            });


        </script>

@stop