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
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Edit Services</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Service</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{route('services.update',$service)}}" method="POST" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Gender</label>
                        <div class="col-md-9">
                          <select class="form-control" name="for_which_gender" tabindex="-1" aria-hidden="true">
                            <option value="M" {{$service->for_which_gender=='M'?"selected":""}}>Male</option>
                            <option value="F" {{$service->for_which_gender=='F'?"selected":""}}>Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Category</label>
                        <div class="col-md-9">
                          <select name="category_id" id="category_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$category->id==$service->category_id?"selected":""}}>{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>


                     


                      <div class="service_edit_info">
                        

                         <div class="form-group row ">
                              <label class="col-md-3 form-label">Select Sub category</label>
                              <div class="col-md-9">
                                <select class="form-control" id="sub_category_id" name="sub_category_id" required="" disabled>
                                  <option value="" selected disabled>Select</option>
                                  @foreach($subcategories as $subcategory)
                                  <option value="{{$subcategory->id}}" {{$subcategory->id==$service->sub_category_id?"selected":""}}>{{$subcategory->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-label">Select Post Sub category</label>
                            <div class="col-md-9">
                              <select class="form-control" name="pre_sub_category_id" tabindex="-1" aria-hidden="true" disabled>
                                <option value="" selected disabled>Select</option>
                                @foreach($presubcategories as $presubcategory)        
                                <option value="{{$presubcategory->id}}" {{$presubcategory->id==$service->pre_sub_category_id?"selected":""}}>{{$presubcategory->name}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>


                      </div>
                      <div class="service_subcategory">
 
                      </div>

                      <div class="service_presubcategory">
                     
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Add price with CGST and SGST 18%</label>
                        <div class="col-md-9">
                          <input type="number" name="price" value="{{$service->price}}" class="form-control" id="inputName" placeholder="Add price with CGST and SGST 18%">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-label">Time</label>
                        <div class="col-md-9">
                          <input class="form-control" value="{{$service->service_time}}" name="service_time" type="number" placeholder="(In Minutes)">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Description</label>
                        <div class="col-md-9">
                          <textarea type="text" class="form-control" name="service_description" id="inputDesignation" placeholder="Description">{{$service->service_description}}</textarea>
                        </div>
                      </div>

                    <div class="row my-3">
                      <div class=" col-md-3">All Images</div>
                      <div class=" col-md-9">
                        @foreach($service->images as $image)
                        <div class="d-flex flex-row">
                          <div class="col-md-8">
                            <img src="{{ asset('uploads/service/'.$image->image_url) }}" class="img-fluid" width="100px">
                          </div>
                          <div class="col-md-4">
                            <button class="btn btn-danger deleteImage" id="{{$image->id}}" type="button">Remove</button>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="form-label col-md-3">Upload More Images</div>
                      <div class="custom-file col-md-9">
                        <input type="file" multiple class="custom-file-input" name="images[]">
                        <label class="custom-file-label">Choose file</label>
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
            $(document).on("change","#category_id",function(){
                $('.service_edit_info').hide();
                $('.service_presubcategory').hide();
                const category_id=$(this).val();
               
                $.ajax({
                    method:'POST',
                    url:`/admin/services/getCategoryData`,
                    data:{category_id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    if(response){
                        
                        $('.service_subcategory').html(response);
                        $("select").select2();
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            $(document).on("change","#sub_category_id",function(){
                const sub_category_id=$(this).val();
               $('.service_presubcategory').show();
                $.ajax({
                    method:'POST',
                    url:`/admin/services/getSubCategoryData`,
                    data:{sub_category_id,"_token":"{{csrf_token()}}"}
                }).then(response=>{
                    if(response){
                        
                        $('.service_presubcategory').html(response);
                        $("select").select2();
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

            $(document).on("click",".deleteImage",function(){
                const el = this;
                const image_id=this.id;
                $.ajax({
                    method:'POST',
                    url:`/admin/services/getDeleteSelectedImages`,
                    data:{image_id,"_token":"{{csrf_token()}}"},
                    encode  : true
                }).then(response=>{
                    if(response){
                         $(el).parent().parent().css('background','tomato');
                         $(el).parent().parent().fadeOut(function(){
                            $(this).remove();
                         });            
                    }
                }).fail(error=>{
                    console.log('error',error);
                });
            });

        </script>

@stop