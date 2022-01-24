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
      <h1 class="h4 mb-0 text-gray-800">Edit Paket Travel</h1>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.travel-package.update', $item->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="title">Jenis Paket</label>
              <input type="text" name="package_type" id="title" class="form-control" value="{{ $item->package_type }}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="location">Lama Waktu Jeep</label>
              <input type="number" class="form-control" name="duration_jeep"  value="{{ old('duration_jeep') ?? $item->duration_jeep }}">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="quota">Kuota</label>
              <input type="number" class="form-control" name="quota" placeholder="quota" value="{{ old('quota') ?? $item->quota }}">
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="type">Jenis</label>
              <select name="type" class="form-control" id="type">
                @switch($item->type)
                    @case("Open Trip")
                        <option selected value="Open Trip">Open Trip</option>
                        <option value="Travel Jeep">Travel Jeep</option>  
                        <option value="Travel Guid">Travel Guid + Jeep</option>
                        @break
                    @case("Travel Jeep")
                        <option value="Open Trip">Open Trip</option>
                        <option selected value="Travel Jeep">Travel Jeep</option>  
                        <option value="Travel Guid">Travel Guid + Jeep</option>
                        @break
                    @case("Travel Guid + Jeep")
                       <option value="Open Trip">Open Trip</option>
                        <option value="Travel Jeep">Travel Jeep</option>  
                        <option selected value="Travel Guid + Jeep">Travel Guid + Jeep</option>
                    @break
                    @default
                        
                @endswitch
              </select>
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="type">Harga</label>
              <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') ?? $item->price }}">
            </div>
          </div>
          <div class="col-md-3 mt-2">
            <div class="form-group">
              <label for="culture">Include Penginapan</label> <br>
              <div class="form-check form-check-inline mt-2 mr-5">
                <input class="form-check-input" type="radio" name="lodging_house" id="penginapanTrue" value="true" {{ $item->lodging_house == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="penginapanTrue">Ya</label>
              </div>
              <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="radio" name="lodging_house" id="penginapanFalse" value="false" {{ $item->lodging_house == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="penginapanFalse">Tidak</label>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-2">
           <div class="form-group">
              <label for="canton">Include Makan 3x Sehari</label> <br>
              <div class="form-check form-check-inline mt-2 mr-5">
                <input class="form-check-input" type="radio" name="eat" id="makanTrue" value="true" {{ $item->eat == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="makanTrue">Ya</label>
              </div>
              <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="radio" name="eat" id="makanFalse" value="false" {{ $item->eat == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="makanFalse">Tidak</label>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="form-group">
              <label>Include</label>
              <textarea name="includes" id="editorInclude">{{ old('includes') ?? $item->includes }}</textarea>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="form-group">
              <label>Masukan Informasi Apapun</label>
              <textarea name="about" id="editorAbout">{{ old('about') ?? $item->about }}</textarea>
            </div>
          </div>
        </div>
          <button class="btn btn-primary btn-block" type="submit">
            Simpan
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