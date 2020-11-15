@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Offers</a></li>
                  <li class="breadcrumb-item"><a href="#">Create Offers</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Offers</h4>
                  </div>
                  <div class="card-body">
                    
                    <form class="form-horizontal" action="{{ route('offers.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                              <label for="inputName"  class="col-md-3 form-label">Offer Name</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('name')}}" class="form-control" id="inputDesignation" placeholder="Name" name="name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Description</label>
                              <div class="col-md-9">
                                <input type="text" value="{{Request::old('description')}}" class="form-control" id="inputDesignation" placeholder="Description" name="description">
                              </div>
                            </div>

                            <div class="form-group row ">
                              <label class="col-md-3 form-label">Services</label>
                              <div class="col-md-9">
                                <select multiple class="form-control"  tabindex="-1" aria-hidden="true" name="services[]">
                                  @foreach($services as $service)
                                  <option value="{{$service->id}}" {{$service->id==Request::old('service_id')?"selected":""}}>{{$service->service_description}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-md-3 form-label">Discount Percentage</label>
                              <div class="col-md-9">
                                <input type="number" value="{{Request::old('discount_percentage')}}" class="form-control" id="inputDesignation" placeholder="Discount Percentage" name="discount_percentage">
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
  