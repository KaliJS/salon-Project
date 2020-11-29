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
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Services List</h3>
                  </div>
                  <div class="card-body">
                  <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('services.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Service</a>
                      </div>

                    </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          
                          <th>Gender</th>
                          <!-- <th>Image</th> -->
                          <th>Category</th>
                          <th>Sub Category</th>
                          <th>Post Category</th>
                          <th>Add Price With CGST and SGST !8%</th>
                          <th>Time (In Minutes)</th>
                          <th>Description</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($services as $service)
                        <tr>
                          <td>{{$service->for_which_gender}}</td>
                          <!-- <td>
                            @foreach($service->images as $image)
                            <img src="{{ asset('uploads/service/'.$image->image_url) }}" class="img-fluid" width="60px">
                            @endforeach
                          </td> -->
                          <td>{{$service->category->name}}</td>
                          <td>{{$service->subcategory->name}}</td>
                          <td>{{$service->presubcategory->name}}</td>
                          <td>{{$service->price}}</td>
                          <td>{{$service->service_time}}</td>
                          <td>{{$service->description}}</td>
                          <td>
                                <div class="btn-group">
                                  <a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ route('services.edit',$service) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ route('services.destroy',$service) }}" method="POST" onsubmit="return confirm('Are you sure , you want to delete this?')">
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
  