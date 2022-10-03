@extends('layout')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Data Lokasi</h1>
            </div>
            <div class="card-body">

                <a href="{{ route('location.create') }}" class="btn btn-primary btn-sm my-3">Tambah Data</a>

                <table class="table table-striped table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lokasi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longtitude</th>
                        <th scope="col">Tindakan</th>

                      </tr>
                    </thead>
                    <tbody>
                    @forelse ($dataLokasi as $v)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $v->nama_lokasi }}</td>
                            <td>{{ $v->deskripsi }}</td>
                            <td>{{ $v->latitude }}</td>
                            <td>{{ $v->longtitude }}</td>
                            <td>
                                <a href="{{ route('location.edit', $v->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('location.delete', $v->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="row justify-content-center">
                            <span class="text-secondary">Maaf Data Tidak diTemukan</span>
                        </div>
                    @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection