@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Services</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add Services</h3>
                  </div>
                  <div class="card-body p-6">


                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active mr-2"><a href="#home" class="btn btn-primary text-white" aria-controls="home" role="tab" data-toggle="tab"><span>Add Services</span></a></li>
                      <li role="presentation" class="mr-2"><a href="#profile" class="btn btn-primary text-white" aria-controls="profile" role="tab" data-toggle="tab"><span>Add Categories</span></a></li>
                      <li role="presentation" class=" mr-2"><a href="#messages" class="btn btn-primary text-white"aria-controls="messages" role="tab" data-toggle="tab"><span>Add Subcategory</span></a></li>
                      <li role="presentation"><a href="#settings" class="btn btn-primary text-white" aria-controls="settings" role="tab" data-toggle="tab"><span>Add Pre Subcategory</span></a></li>
                      
                    </ul>
        
        
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane mt-3 active" id="home">
                          <div class="card-body">
                          <form class="form-horizontal">
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Gender</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Select Pre Subcategory</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>presub1</option>
                                  <option>presub2</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Select Subcategory</label>
                              <div class="col-md-9">
                                <select class="form-control " tabindex="-1" aria-hidden="true">
                                  <option>subcat1</option>
                                  <option>subcat2</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Add price with CGST and SGST 18%</label>
                              <div class="col-md-9">
                                <input type="number" class="form-control" id="inputName" placeholder="Add price with CGST and SGST 18%">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 form-label">Time</label>
                              <div class="col-md-9">
                                <input class="form-control" type="time" name="time">
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Description</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="inputDesignation" placeholder="Description">
                              </div>
                            </div>

                            <div class="form-group row">
                            <div class="form-label col-md-3">Images</div>
                            <div class="custom-file col-md-9">
                              <input type="file" class="custom-file-input" name="example-file-input-custom">
                              <label class="custom-file-label">Choose file</label>
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
                        <div role="tabpanel" class="tab-pane mt-3" id="profile">
                          <div class="form-group">
                            <label class="col-md-3 form-label">Category</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Category">
                              <span class="input-group-append">
                                <button class="btn btn-primary" type="button">Add</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane mt-3" id="messages">
                          <div class="form-group">
                            <label class="col-md-3 form-label">Subcategory</label>
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
                            <label class="col-md-3 form-label">Pre Subcategory</label>
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
                    <h3 class="card-title">Services List</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Gender</th>
                          <th>Image</th>
                          <th>Select Pre Sub</th>
                          <th>Select Sub Category</th>
                          <th>Add Price With CGST and SGST !8%</th>
                          <th>Time</th>
                          <th>Discription</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            <img src="{{ asset('login/images/login.png') }}" class="img-fluid" width="60px">
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('services/edit-service') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                        </tr>
                        
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            <img src="{{ asset('login/images/login.png') }}" class="img-fluid" width="60px">
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('services/edit-service') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                        </tr>
                        <tr>
                          <td>Joan Powell</td>
                          <td>
                            <img src="{{ asset('login/images/login.png') }}" class="img-fluid" width="60px">
                          </td>
                          <td>joan@powell.com</td>
                          <td>designation</td>
                          <td>77834</td>
                          <td>permission</td>
                          <td>permission</td>
                          <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('services/edit-service') }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> Delete</a>
                                  </div>
                                </div>
                              </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- table-responsive -->
                </div>
                </div>
              </div>



          </div>
        </div>

@stop
  