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
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create SubCategory</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{ route('services-subcategories.store') }}" method="POST" >
                       @csrf

                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Category</label>
                        <div class="col-md-9">
                          <select class="form-control"  tabindex="-1" aria-hidden="true" name="category_id">
                            <option selected disabled>Select</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$category->id==Request::old('category_id')?"selected":""}}>{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                       
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Category Name</label>
                        <div class="col-md-9">
                          <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
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
  