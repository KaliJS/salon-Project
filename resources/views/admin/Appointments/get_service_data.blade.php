@foreach($services as $service)
<h5 class="text-center"><strong><u>{{$service->service_description}} details</u></strong></h5>
<div>
    <div class="form-group row" id="row{{$service->id}}">
        <label for="inputPassword3" class="col-md-3 form-label">Stylist Name</label>
        <div class="col-md-9">
        <select name="stylist_name{{$service->id}}" class="form-control stylist_name" required>
            <option disabled selected>Select</option>
            @foreach($staff as $s)
            <option value="{{$s->id}}">{{$s->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="bookedButtons">

        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-label">Time</label>
        <div class="col-md-9">
        <input class="form-control time" type="time" name="time{{$service->id}}" required>
        </div>
    </div>
</div>
@endforeach
