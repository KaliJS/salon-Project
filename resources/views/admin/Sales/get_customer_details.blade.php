<div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">offer</label>
                        <div class="col-md-9">
                            <select name="offers[]" id="offer" class="form-control" required>
                                @foreach($offers as $offer)
                                <option value="{{$offer->id}}">{{$offer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>