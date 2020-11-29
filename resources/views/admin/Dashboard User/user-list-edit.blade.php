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
                  <li class="breadcrumb-item"><a href="#">Edit User</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update User</h4>
                  </div>
                  <div class="card-body">
                    
                      <form class="form-horizontal" action="{{route('dashboard-user.update',$dashboard_user)}}" method="POST" >
                      @method('PUT')
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Staff Name</label>
                        <div class="col-md-9">
                          <select name="staff_id" id="staff_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($staffs as $staff)
                            <option value="{{$staff->id}}" {{$staff->id==$dashboard_user->staff_id?"selected":""}}>{{$staff->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      

                      <div class="staff_edit_info">

                          <div class="form-group row">
                            <label for="inputName" class="col-md-3 form-label">Phone Number</label>
                            <div class="col-md-9">
                              <input type="number" disabled value="{{$dashboard_user->staff->phone}}" class="form-control" id="phone" placeholder="Phone Number">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                              <input type="email" disabled value="{{$dashboard_user->staff->email}}" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName"  class="col-md-3 form-label">Designation</label>
                            <div class="col-md-9">
                              <input type="text" disabled value="{{$dashboard_user->staff->designation->name}}" class="form-control" id="inputDesignation" placeholder="Designation">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-md-3 form-label">Employee ID</label>
                            <div class="col-md-9">
                              <input type="text" disabled value="{{$dashboard_user->staff->employee_id}}" class="form-control" id="inputEmplyeeId" placeholder="Employee Id">
                            </div>
                          </div>
                         
                      </div>

                      <div class="staff_details">

                      </div>


                      <div class="form-group row ">
                        <label class="col-md-3 form-label">User Permissions</label>
                        <div class="col-md-9">
                          <select multiple class="form-control"  tabindex="-1" aria-hidden="true" name="permissions[]">
                            <option value="appointment" {{in_array("appointment",$selected_permissions)?"selected":""}} >Appointment</option>
                            <option value="inventory" {{in_array("inventory",$selected_permissions)?"selected":""}}>Inventory</option>
                            <option value="accounts" {{in_array("accounts",$selected_permissions)?"selected":""}}>Accounts</option>
                            <option value="staff-management" {{in_array("staff-management",$selected_permissions)?"selected":""}}>Staff Management</option>
                            <option value="services" {{in_array("services",$selected_permissions)?"selected":""}}>Services</option>
                            <option value="users/customer" {{in_array("users/customer",$selected_permissions)?"selected":""}}>Users/Customer</option>
                            <option value="products" {{in_array("products",$selected_permissions)?"selected":""}}>Products</option>
                            <option value="offers" {{in_array("offers",$selected_permissions)?"selected":""}}>Offers</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                          <input type="email" value="{{$dashboard_user->email}}" name="email" class="form-control" id="inputPassword3" placeholder="email">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                        <div class="col-md-9">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                    
                      
                      <div class="form-group mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                          <button type="submit" class="btn btn-primary">Update</button>
                          
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
                    url:`/admin/dashboard-user/getStaffData?staff_id=${staff_id}`,
                    data:{staff_id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    if(response){
                        $('.staff_edit_info').hide();
                        $('.staff_details').html(response);
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            

        </script>

@stop