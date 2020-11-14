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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add Designation/Skills</h3>
                  </div>
                  <div class="card-body p-6">


                    <ul class="nav nav-tabs" role="tablist">
                     
                      <li role="presentation" class="active mr-2"><a href="#messages" class="btn btn-primary text-white"aria-controls="messages" role="tab" data-toggle="tab"><span>Add Designation</span></a></li>
                      <li role="presentation"><a href="#settings" class="btn btn-primary text-white" aria-controls="settings" role="tab" data-toggle="tab"><span>Add Skills</span></a></li>
                      
                    </ul>
        
        
                    <div class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane mt-3" id="messages">
                          <div class="form-group">
                            <label class="col-md-3 form-label">Designation</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Subcategory">
                              <span class="input-group-append">
                                <button class="btn btn-primary" type="button">Add</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane mt-3" id="settings">
                          <div class="form-group">
                            <label class="col-md-3 form-label">Skills</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Pre Subcategory">
                              <span class="input-group-append">
                                <button class="btn btn-primary" type="button">Add</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            
           
         
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Staff List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ url('staff/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Staff</a>
                      </div>
                      
                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Email Id</th>
                          <th>Joining Date</th>
                          <th>Skills</th>
                          <th>Daily Worked Hours</th>
                          <th>Staff Report</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            dkfsjldkds
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            dfsdklfjsdf
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            fsdjfklsdjs
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>permission</td>
                        </tr>
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
  