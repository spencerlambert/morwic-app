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
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Image URL *</label>
              <input type="text" class="form-control" name="image_url" placeholder="Your Answer" required/>
          </div>
          <div class="form-group">
              <label for="price">Date Acquired *</label>
              <input type="text" class="form-control datepicker" name="accured_date" required/>
          </div>
          <div class="form-group">
              <label for="quantity">Present Day Value</label>
              <input type="text" class="form-control" name="present_value" placeholder="Your Answer" />
          </div>
          <div class="form-group">
              <label for="price">Value When Acquired</label>
              <input type="text" class="form-control" name="accured_value" placeholder="Your Answer" />
          </div>
          <div class="form-group">
              <label for="price">Ownership *</label>
              <select class="form-control" name="ownership" required/>
                  <option value="his" >His</option>
                  <option value="her" >Her</option>
                  <option value="community">Community Property</option>
              </select>
          </div>
          <div class="form-group">
              <label for="price">Purchased Prior to Marriage * </label><br>
              Yes:  <input type="radio"  name="purchased_prior_marriage" value=1 checked/>
              No:  <input type="radio"  name="purchased_prior_marriage" value=0 />
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
