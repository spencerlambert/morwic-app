@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper row">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body col-lg-8  col-md-offset-2 col-md-8 col-lg-offset-2">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('update', $asset->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            @csrf
            <label for="name">Image URL *</label>
            <input type="text" class="form-control" name="image_url" value="{{ $asset->image_url }}" required/>
        </div>
        <div class="form-group">
            <label for="price">Date Acquired *</label>
            <input type="text" class="form-control datepicker" name="accured_date" value="{{ $asset->accured_date }}" required/>
        </div>
        <div class="form-group">
            <label for="quantity">Present Day Value</label>
            <input type="text" class="form-control" name="present_value" value="{{ $asset->present_value }}" />
        </div>
        <div class="form-group">
            <label for="price">Value When Acquired</label>
            <input type="text" class="form-control" name="accured_value" value="{{ $asset->accured_value }}" />
        </div>
        <div class="form-group">
            <label for="price">Ownership *</label>
            <select class="form-control" name="ownership" required/>
                <option></option>
                <option @if($asset->ownership=='his') selected @else  @endif value="his" >His</option>
                <option @if($asset->ownership=='her') selected @else  @endif value="her" >Her</option>
                <option @if($asset->ownership=='community') selected @else  @endif value="community">Community Property</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Purchased Prior to Marriage * </label><br>
            Yes:  <input type="radio"  name="purchased_prior_marriage" value=1 @if($asset->purchased_prior_marriage) checked @else  @endif/>
            No:  <input type="radio"  name="purchased_prior_marriage" value=0 @if($asset->purchased_prior_marriage)  @else checked @endif/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
