
<div class="form-group row ">
    <label class="col-md-3 form-label">Select Post Sub category</label>
    <div class="col-md-9">
      <select class="form-control" name="pre_sub_category_id" tabindex="-1" aria-hidden="true">
      	<option value="" selected disabled>Select</option>
      	@foreach($presubcategories as $presubcategory)      	
        <option value="{{$presubcategory->id}}" {{$presubcategory->id==$service->presubcategory_id?"selected":""}}>{{$presubcategory->name}}</option>
        @endforeach
      </select>
    </div>
</div>
