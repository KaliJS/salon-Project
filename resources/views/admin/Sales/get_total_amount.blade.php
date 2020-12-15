	<div class="form-group row  totalAmount">
		<label for="inputPassword3" class="col-md-3 form-label"><strong>Initial Amount :</strong><p>(before discounts)</p></label>
		<div class="col-md-9">
		  <input type="number" class="form-control" value="{{$amount}}" name="total_amount" id="totalAmount" placeholder="Stylist Name" readonly>
		</div>
	</div>
@if(count($selected_offer))
<div class="form-group row totalAmount">
	<label for="inputPassword3" class="col-md-3 form-label"><strong>Applied Offers: </strong></label>
	<ul class="list-group col-md-9">
		
		@foreach($selected_offer as $offer)
		<li class="list-group-item">
			Offer Name: <strong>{{$offer->offer->name}}</strong> has <strong>{{$offer->offer->discount_percentage}}% </strong> discount on Service: <strong>{{$offer->service->service_description}} </strong>
		</li>
		@endforeach
		
	</ul>
</div>
@endif

<div class="form-group row totalAmount">
	<label for="inputPassword3" class="col-md-3 form-label"><strong>Total Amount: </strong></label>
	<div class="col-md-9">
	  <input type="number" class="form-control" style="background-color: #705ec8;color: white;font-weight: 700;" value="{{$final_amount}}" name="final_amount" id="totalAmount" placeholder="Stylist Name" readonly>
	</div>
</div>

<div class="form-group row hidden">
<label for="inputEmail3" class="col-md-3 form-label">Product</label>
	<div class="col-md-9">
	    <select name="offers[]" id="sproduct" class="form-control" multiple>
	    	@if(count($selected_offer))
	        @foreach($selected_offer as $offer)
	        <option value="{{$offer->id}}" selected>{{$offer->description}}</option>
	        @endforeach
	        @endif
	    </select>
	</div>
</div>