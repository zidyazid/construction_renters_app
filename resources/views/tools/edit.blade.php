@extends('layout')

@section('content')

  <div class="container px-5 py-5 bg-white rounded">
    <h3 class="py-3">
        Tambah Data Alat Berat
    </h3>
   
        <form method="POST" action="/tool/update/{{ $toolsToUpdate->id }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group py-3">
              <label for="nama_alat">Nama Alat Berat</label>
              <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Nama Alat Berat" value="{{ $toolsToUpdate->nama_alat }}">
            </div>
            <div class="form-group py-3">
              <label for="tipe">Tipe</label>
              <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe" value="{{ $toolsToUpdate->tipe }}">
            </div>
            <div class="form-group py-3">
              <label for="kondisi">Kondisi</label>
              <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi" value="{{ $toolsToUpdate->kondisi }}">
            </div>
            <div class="form-group py-3">
              <label for="jumlah_ketersedian">Jumlah Unit</label>
              <input type="text" class="form-control" id="jumlah_ketersedian" name="jumlah_ketersedian" placeholder="Jumlah Unit" value="{{ $toolsToUpdate->jumlah_ketersedian }}">
            </div>
            {{-- <div class="form-group py-3">
              <label for="kondisi">Kondisi</label>
              <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi">
            </div> --}}
            {{-- input gambar --}}
            <div class="input-group py-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="file">Pilih Gambar</label>
                </div>
            </div>
       
            <button type="submit" class="btn btn-primary">Save</button>
       
        </form>
 
  </div>
  
@endsection