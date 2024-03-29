@extends('layouts.app')

@section('content')
<div class="container">
  <style>
  .uper {
    margin-top: 40px;
  }
  .inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: #6cb2eb;
    display: inline-block;
    padding: 8px;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #6cb2eb;
}
.inputfile + label {
  cursor: pointer; /* "hand" cursor */
}
.inputfile:focus + label {
  outline: 1px dotted #000;
  outline: -webkit-focus-ring-color auto 5px;
}
</style>
<div class="card uper">
  <div class="card-header">
   Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('update', $asset->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
         
          <div class="form-group">
              <label for="quantity">Property Item Name *</label>
              <input type="text" class="form-control" name="property_item_name" placeholder="Your Answer" required value="{{ $asset->property_item_name }}"/>
          </div>
          <div class="form-group">
              <label for="price">Date Of Purchase *</label>
              <input type="text" class="form-control datepicker" name="accured_date" value="{{ $asset->accured_date }}"/>
          </div>
         <div class="form-group">
              <label for="quantity">Item Location *</label>
              <input type="text" class="form-control" name="item_location" placeholder="Your Answer" required value="{{ $asset->item_location }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Serial Number *</label>
              <input type="text" class="form-control" name="serial_number" placeholder="Your Answer" required value="{{ $asset->serial_number }}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Make - Model *</label>
              <input type="text" class="form-control" name="make_model" placeholder="Your Answer" required value="{{ $asset->make_model }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Upload Image Of Property And Receipts*</label>
              <input type="file" class="form-control form-control-files" name="upload_image_property_receipts"  @if($asset->upload_image_property_receipts)  @else required @endif/>
               @if ($agent->isMobile())
             <br>
              
            <input type="file" name="take_photo_phone" id="file" class="inputfile"  accept="image/*" capture> 
               <label for="file">Choose a Photo</label> 
               <br>
           @endif
              @if($asset->upload_image_property_receipts)
                <img src="{{url('/').'/thumbnail_images/'.$asset->upload_image_property_receipts}}" style="width: 150px;height: 150px;"/>
              @endif
          </div>
          <div class="form-group">
              <label for="price">Purchased Prior To Marriage * </label><br>
              Yes:  <input type="radio"  name="purchased_prior_marriage" value=1 @if($asset->purchased_prior_marriage) checked @else  @endif>
              No:  <input type="radio"  name="purchased_prior_marriage" value=0 @if($asset->purchased_prior_marriage)  @else checked @endif/>
          </div>
          <div class="form-group">
              <label for="price">Who Owns The Property *</label>
              <select class="form-control" name="ownership" required />
                 <option value="other" @if($asset->ownership=='other') selected @else  @endif >Select Ownership</option>
                  <option value="his" @if($asset->ownership=='his') selected @else  @endif value="his" >His</option>
                  <option value="her" @if($asset->ownership=='her') selected @else  @endif value="her" >Her</option>
                  <option value="community" @if($asset->ownership=='community') selected @else  @endif >Community Property</option>
              </select>
              <br>
              <input type="text" class="form-control" name="other_ownership" placeholder="Other"  value="{{ $asset->other_ownership }}"/>
          </div>
          <div class="form-group">
              <label for="price">Value Of The Property When Bought? *</label>
              <input type="text" class="form-control" name="accured_value" placeholder="Your Answer" value="{{ $asset->accured_value }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Value Of The Property Now? *</label>
              <input type="text" class="form-control" name="present_value" placeholder="Your Answer" value="{{ $asset->present_value }}"/>
          </div>
          
           <div class="form-group">
              <label for="quantity">Notes</label>
              <input type="text" class="form-control" name="notes" placeholder="Your Answer" value="{{ $asset->notes }}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
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