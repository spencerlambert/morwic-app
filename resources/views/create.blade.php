@extends('layouts.app')

@section('content')
<div class="container">
  <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Asset
  </div>
  <div class="card-body">
  @if (!empty($success))
    <h1>{{$success}}</h1>
@endif
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
          
          <div class="form-group">
           @csrf
              <label for="quantity">Property Item Name *</label>
              <input type="text" class="form-control" name="property_item_name" placeholder="Your Answer" required value="{{ old('property_item_name') }}"/>
          </div>
          <div class="form-group">
              <label for="price">Date Of Purchase *</label>
              <input type="text" class="form-control datepicker" name="accured_date" value="{{ old('accured_date') }}" required/>
          </div>
         <div class="form-group">
              <label for="quantity">Item Location *</label>
              <input type="text" class="form-control" name="item_location" placeholder="Your Answer" required value="{{ old('item_location') }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Serial Number *</label>
              <input type="text" class="form-control" name="serial_number" placeholder="Your Answer" required value="{{ old('serial_number') }}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Make - Model *</label>
              <input type="text" class="form-control" name="make_model" placeholder="Your Answer" required value="{{ old('image_url') }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Upload Image Of Property And Receipts*</label>
              <input type="file" class="form-control form-control-files" name="upload_image_property_receipts" placeholder="Your Answer" required />
          </div>
          <div class="form-group">
              <label for="price">Purchased Prior To Marriage * </label><br>
              Yes:  <input type="radio"  name="purchased_prior_marriage" value=1 checked/>
              No:  <input type="radio"  name="purchased_prior_marriage" value=0 />
          </div>
          <div class="form-group">
              <label for="price">Who Owns The Property *</label>
              <select class="form-control" name="ownership" required />
                <option value="other" >Select Ownership</option>
                  <option value="his" >His</option>
                  <option value="her" >Her</option>
                  <option value="community">Community Property</option>
              </select>
              <br>
              <input type="text" class="form-control" name="other_ownership" placeholder="Other"  value="{{ old('other_ownership') }}"/>
          </div>
          <div class="form-group">
              <label for="price">Value Of The Property When Bought? *</label>
              <input type="text" class="form-control" name="accured_value" placeholder="Your Answer" value="{{ old('accured_value') }}" required/>
          </div>
          <div class="form-group">
              <label for="quantity">Value Of The Property Now? *</label>
              <input type="text" class="form-control" name="present_value" placeholder="Your Answer" value="{{ old('present_value') }}" required/>
          </div>
          
           <div class="form-group">
              <label for="quantity">Notes</label>
              <input type="text" class="form-control" name="notes" placeholder="Your Answer" value="{{ old('notes') }}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
@endsection
@section('scripts')
<script>
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>
@endsection
