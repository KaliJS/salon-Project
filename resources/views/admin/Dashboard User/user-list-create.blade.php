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
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Dashboard User</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Create User</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                  </div>
                  <div class="card-body">
                     <form class="form-horizontal" action="{{route('dashboard-user.store')}}" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Staff Name</label>
                        <div class="col-md-9">
                          <select name="staff_id" id="staff_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($staffs as $staff)
                            <option value="{{$staff->id}}">{{$staff->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                     
                      <div class="staff_details">

                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                          <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                        <div class="col-md-9">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Permission</label>
                        <div class="col-md-9">
                          <select class="form-control" name="permissions[]" multiple tabindex="-1" aria-hidden="true">
                            <option value="" disabled>Select</option>
                            <option value="appointment">Appointment</option>
                            <option value="inventory">Inventory</option>
                            <option value="accounts">Accounts</option>
                            <option value="staff-management">Staff Management</option>
                            <option value="services">Services</option>
                            <option value="users/customer">Users/Customer</option>
                            <option value="products">Products</option>
                            <option value="offers">Offersr</option>
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
            $(document).on("change","#staff_id",function(){
                const staff_id=$(this).val();
               
                $.ajax({
                    method:'POST',
                    url:`getStaffData?staff_id=${staff_id}`,
                    data:{staff_id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    if(response){
                        $('.staff_details').html(response);
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            

        </script>

@stop
  