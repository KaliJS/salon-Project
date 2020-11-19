
<div class="form-group row ">
    <label class="col-md-3 form-label">Select Sub category</label>
    <div class="col-md-9">
      <select class="form-control" id="sub_category_id" name="sub_category_id" required="">
        <option value="" selected disabled>Select</option>
        @foreach($subcategories as $subcategory)
        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
        @endforeach
      </select>
    </div>
</div>
