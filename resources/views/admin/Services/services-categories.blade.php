@extends('layouts.admin')

@section('content')

    
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Services Categories</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
            

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Categories List</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="{{ route('services-categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Categories</a>
                      </div>
                      
                    </div>
                    <div class="e-table">
                      <div class="table-responsive table-lg">
                        <table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
                          <thead>
                            <tr>
                              
                              <th>Category Name</th>
                              
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            

                            @foreach ($categories as $category)
                            <tr>
                              
                              
                              <td class="text-nowrap align-middle"><span class="font-weight-bold">{{$category->name}}</span></td>
                              
                              
                              
                              
                              <td>
                                <div class="btn-group">
                                  <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/invoice-list#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{ url('/admin/services-categories/editCategory/'.$category->id) }}"><i class="fa fa-edit mr-2"></i> Edit</a>
                                    <form action="{{ url('/admin/services-categories/destroyCategory/'.$category->id) }}" method="POST">
                                  
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
            <!-- End Row -->
            
            
           
            

          </div>
        </div>

@stop
  