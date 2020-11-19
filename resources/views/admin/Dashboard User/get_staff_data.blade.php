<div class="form-group row">
  <label for="inputName" class="col-md-3 form-label">Phone Number</label>
  <div class="col-md-9">
    <input disabled type="number" value="{{$staff->phone}}" class="form-control" id="phone" placeholder="Phone Number">
  </div>
</div>
<div class="form-group row">
  <label for="inputEmail3" class="col-md-3 form-label">Email</label>
  <div class="col-md-9">
    <input disabled type="email" value="{{$staff->email}}" class="form-control" id="inputEmail3" placeholder="Email">
  </div>
</div>
<div class="form-group row">
  <label for="inputName" class="col-md-3 form-label">Designation</label>
  <div class="col-md-9">
    <input disabled type="text" value="{{$staff->designation->name}}" class="form-control" id="inputDesignation" placeholder="Designation">
  </div>
</div>
<div class="form-group row">
  <label for="inputName" class="col-md-3 form-label">Employee ID</label>
  <div class="col-md-9">
    <input disabled type="text" value="{{$staff->employee_id}}" class="form-control" id="inputEmplyeeId" placeholder="Employee Id">
  </div>
</div>