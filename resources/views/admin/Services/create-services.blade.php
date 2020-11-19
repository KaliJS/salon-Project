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
                  <li class="breadcrumb-item"><a href="#">Create Services</a></li>
                  
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
             <!-- Row-1 -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Create Service</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row ">
                        <label class="col-md-3 form-label">Gender</label>
                        <div class="col-md-9">
                          <select class="form-control" name="for_which_gender" tabindex="-1" aria-hidden="true">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Select Category</label>
                        <div class="col-md-9">
                          <select name="category_id" id="category_id" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                     

                      <div class="service_subcategory">

                      </div>

                      <div class="service_presubcategory">

                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Add price with CGST and SGST 18%</label>
                        <div class="col-md-9">
                          <input type="number" name="price" class="form-control" id="inputName" placeholder="Add price with CGST and SGST 18%">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-label">Time</label>
                        <div class="col-md-9">
                          <input class="form-control" name="service_time" type="number" placeholder="(In Minutes)">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">Description</label>
                        <div class="col-md-9">
                          <textarea type="text" class="form-control" name="service_description" id="inputDesignation" placeholder="Description"></textarea>
                        </div>
                      </div>

                    <div class="form-group row">
                      <div class="form-label col-md-3">Images</div>
                      <div class="custom-file col-md-9">
                        <input type="file" multiple class="custom-file-input" name="images[]" required>
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
              </div>
            
            </div>
            <!-- End Row-1 -->

          </div>
        </div>

@stop
  

@section('js')

        <script type="text/javascript">
            $(document).on("change","#category_id",function(){
                const category_id=$(this).val();
               
                $.ajax({
                    method:'POST',
                    url:`getCategoryData?category_id=${category_id}`,
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
               
                $.ajax({
                    method:'POST',
                    url:`getSubCategoryData?sub_category_id=${sub_category_id}`,
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

        </script>

@stop
