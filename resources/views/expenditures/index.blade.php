@extends('layout')

@section('content')
    
    <div class="container">

        <a href="{{ route('expenditure.create') }}" class="btn btn-primary my-3">Tambah Data</a>

        <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Total Biaya</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($pengeluaran as $v)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $v->tujuan }}</td>
              <td>{{ $v->keterangan }}</td>
              <td>{{ $v->total_biaya }}</td>
              <td>{{ $v->created_at }}</td>
              <td>
                <a href="{{ route('expenditure.edit', $v->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ route('expenditure.destroy', $v->id) }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
    </div>

@endsection