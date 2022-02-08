@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
  
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>    
      @endforeach
    </ul>
  </div>  
  @endif
 

  <div class="card shadow">
    <div class="card-header"> 
      <h1 class="h4 mb-0 text-gray-800">Add Travel Package</h1>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.travel-package.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="title">Package Type</label>
              <select name="package_type" class="form-control" id="type">
                <option value="Sunrise Package">Sunrise Package</option>
                <option value="Sunset Package">Sunset Package</option>
                <option value="Sunset Package">Night Package</option>
                <option value="Short 1">Short 1</option>
                <option value="Short 2">Short 2</option>
                <option value="Medium 1">Medium 1</option>
                <option value="Medium 2">Medium 2</option>
                <option value="Long Package">Long Package</option>
                <option value="Premium Package">Premium Package</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="location">Jeep Duration Time</label>
              <input type="number" class="form-control" name="duration_jeep"  value="{{ old('duration_jeep') }}">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="quota">Quota</label>
              <input type="number" class="form-control" name="quota" placeholder="quota" value="{{ old('quota') }}">
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="type">Type Trip</label>
              <select name="type" class="form-control" id="type">
                <option value="Open Trip">Open Trip</option>
                <option value="Travel Jeep">Travel Jeep</option>
                <option value="Travel Guid + Jeep">Travel Guid + Jeep</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="type">Price</label>
              <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="culture">Include Lodging House</label> <br>
              <div class="form-check form-check-inline mt-2 mr-5">
                <input class="form-check-input" type="radio" name="lodging_house" id="penginapanTrue" value="true">
                <label class="form-check-label" for="penginapanTrue">Yes</label>
              </div>
              <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="radio" name="lodging_house" id="penginapanFalse" value="false">
                <label class="form-check-label" for="penginapanFalse">No</label>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="canton">Includes Meals</label> <br>
              <div class="form-check form-check-inline mt-2 mr-5">
                <input class="form-check-input" type="radio" name="eat" id="makanTrue" value="true">
                <label class="form-check-label" for="makanTrue">Yes</label>
              </div>
              <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="radio" name="eat" id="makanFalse" value="false">
                <label class="form-check-label" for="makanFalse">No</label>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="form-group">
              <label>Includes</label>
              <textarea name="includes" id="editorInclude">{{ old('includes') }}</textarea>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="form-group">
              <label>Enter Any Information</label>
              <textarea name="about" id="editorAbout">{{ old('about') }}</textarea>
            </div>
          </div>
        </div>
          <button class="btn btn-primary btn-block" type="submit">
            SAVE
          </button>
      </form>
    </div>
  </div>
</div>

@endsection

@push('addon-script')
  <script>
      ClassicEditor
          .create( document.querySelector( '#editorAbout' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush

@push('prepend-script')
  <script>
      ClassicEditor
          .create( document.querySelector( '#editorInclude' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush