@extends('layouts.admin')

@section('content')


            <!--/app header-->
            <!--Page header-->

            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Staff Management</a>
                  </li>
                </ol>
              </div>
            </div>
            <!--End Page header-->



         <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Staff List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('staff.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Staff</a>
                      </div>

                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>

                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Email Id</th>
                                <th>Joining Date</th>
                                <th>Working Days</th>
                                <th>Shift Start</th>
                                <th>Shift End</th>
                                <th>Status</th>
                                <th>Services</th>
                                <th>Designation</th>
                                <th>Employee Id</th>
                                <th>Options</th>

                            </tr>
                          </thead>
                          <tbody>


                            @foreach ($staff as $s)
                            <tr>

                              <td class="text-nowrap align-middle">{{$s->name}}</td>
                              <td class="text-nowrap align-middle">{{$s->address}}</td>
                              <td class="text-nowrap align-middle">{{$s->phone}}</td>
                              <td class="text-nowrap align-middle">{{$s->email}}</td>
                              <td class="text-nowrap align-middle">{{$s->doj}}</td>
                              <td class="text-nowrap align-middle">{{$s->days}}</td>
                              <td class="text-nowrap align-middle">{{$s->shift_start_time}}</td>
                              <td class="text-nowrap align-middle">{{$s->shift_end_time}}</td>
                              <td class="text-nowrap align-middle">{{$s->status == '0'? 'Not Active': 'Active'}}</td>
                              <td class="text-nowrap align-middle">
                                @foreach($s->skills as $skill)
                                    <span class="btn btn-primary">
                                        {{$skill->service_description}}
                                    </span>
                                @endforeach
                              </td>
                              <td class="text-nowrap align-middle">{{$s->designation->name}}</td>
                              <td class="text-nowrap align-middle">{{$s->employee_id}}</td>

                              <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('staff.edit',$s) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ route('staff.destroy',$s) }}" method="POST" onsubmit="return confirm('Are you sure , you want to delete this?')">
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

          </div>
        </div>

@stop
