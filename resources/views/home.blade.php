@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
      </div>
    @endif
    @if($other_assets->total())
      @php
      $column = "col-md-3";
      @endphp
    @else
      @php
      $column = "col-md-4";
      @endphp
    @endif

    <div class="row justify-content-center">
    <div id="His" class="{{ $column }}">
              <h3> His Assests </h3>
           @if($his_assets->count())
              @foreach($his_assets as $his_asset)
              <div class="row">
                <div class="col-md-12">

                  <img src="{{url('/').'/thumbnail_images/'.$his_asset->upload_image_property_receipts}}" class="img-thumbnail" alt="property image thumbnail"><br>
                  accured_date:{{$his_asset->accured_date}}<br>
                  present_value:{{$his_asset->present_value}}<br>
                  accured_value:{{$his_asset->accured_value}}<br>
                  purchased prior marriage: @if($his_asset->purchased_prior_marriage) Yes @else No @endif<br>
                  <a href="{{ route('edit',$his_asset->id)}}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('destroy', $his_asset->id)}}" method="post"  style="float:right;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                  </form>
            </td>
                </div>
              </div>
              <hr>
              @endforeach
              {!! $his_assets->render() !!}
              @endif
            </div>

            <div id="her" class="{{ $column }}">
              <h3> Her Assests </h3>

              @if($her_assets->count())
              @foreach($her_assets as $her_asset)
              <div class="row">
                <div class="col-md-12">

                  <img src="{{url('/').'/thumbnail_images/'.$her_asset->upload_image_property_receipts}}" class="img-thumbnail" alt="property image thumbnail"><br>
                  accured_date:{{$her_asset->accured_date}}<br>
                  present_value:{{$her_asset->present_value}}<br>
                  accured_value:{{$her_asset->accured_value}}<br>
                  purchased_prior_marriage: @if($her_asset->purchased_prior_marriage) Yes @else No @endif<br>
                  <a href="{{ route('edit',$her_asset->id)}}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('destroy', $her_asset->id)}}" method="post" style="float:right;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete the asset?')">Delete</button>
                  </form>
                </div>
              </div>
              <hr>
              @endforeach
              {!! $her_assets->render() !!}
              @endif
            </div>


            <div id="community" class="{{ $column }}">
              <h3> Community Assests </h3>

              @if($community_assets->count())
              @foreach($community_assets as $community_asset)
              <div class="row">
                <div class="col-md-12">
                  <img src="{{url('/').'/thumbnail_images/'.$community_asset->upload_image_property_receipts}}" class="img-thumbnail" alt="property image thumbnail"><br>
                  accured_date:{{$community_asset->accured_date}}<br>
                  present_value:{{$community_asset->present_value}}<br>
                  accured_value:{{$community_asset->accured_value}}<br>
                  purchased_prior_marriage: @if($community_asset->purchased_prior_marriage) Yes @else No @endif<br>
                  <a href="{{ route('edit',$community_asset->id)}}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('destroy', $community_asset->id)}}" method="post" style="float:right;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                  </form>
                </div>
              </div>
              <hr>
              @endforeach
              {!! $community_assets->render() !!}
              @endif
            </div>

            @if($other_assets->total())

            <div id="other" class="{{ $column }}">
              <h3> Other Assests </h3>

              @if(isset($other_assets))
              @foreach($other_assets as $other_asset)
              <div class="row">
                <div class="col-md-12">
                  <img src="{{url('/').'/thumbnail_images/'.$other_asset->upload_image_property_receipts}}" class="img-thumbnail" alt="property image thumbnail"><br>
                  Assest Owner:{{$other_asset->other_ownership}}<br>
                  accured_date:{{$other_asset->accured_date}}<br>
                  present_value:{{$other_asset->present_value}}<br>
                  accured_value:{{$other_asset->accured_value}}<br>
                  purchased_prior_marriage: @if($other_asset->purchased_prior_marriage) Yes @else No @endif<br>
                  <a href="{{ route('edit',$other_asset->id)}}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('destroy', $other_asset->id)}}" method="post" style="float:right;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                  </form>
                </div>
              </div>
              <hr>
              @endforeach
              {!! $other_assets->render() !!}
              @endif
            </div>
            @endif

    </div>
</div>
@endsection
