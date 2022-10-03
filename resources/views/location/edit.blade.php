@extends('layout')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Edit Data Lokasi</h1>
            </div>
            <div class="card-body">

            <div class="row">
                <div class="col-lg-4">
                    <form method="POST" action="{{ route('location.update', $location->id) }}">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="nama_lokasi">Nama Lokasi</label>
                          <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="{{ $location->nama_lokasi }}" placeholder="Nama Lokasi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $location->deskripsi }}</textarea>
                          </div>
                        <div class="form-group mb-3">
                          <label for="latitude">Latitude</label>
                          <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $location->latitude }}" placeholder="Latitude">
                        </div>
                        <div class="form-group mb-3">
                          <label for="longtitude">Longtitude</label>
                          <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{ $location->longtitude }}" placeholder="Longtitude">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        
            </div>
        </div>
    </div>

@endsection