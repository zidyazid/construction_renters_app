@extends('layout')

@section('content')

  <div class="container px-5 py-5 bg-white rounded">

    <h3>Data Alat Berat</h3>
    <div class="py-3">
        <a href="{{ route('tool.create') }}" class="btn btn-primary">+ Tambah Data Baru</a>
    </div>
    <table class="table table-borderless table-responsive">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Alat Berat</th>
            <th scope="col">Tipe</th>
            <th scope="col">Status</th>
            <th scope="col">Jumlah Unit</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tools as $v)
            <tr>
              <td scope="row">{{ $loop->iteration }}</td>
              <td>
                <img src="{{ asset('image_upload/'.$v->gambar) }}" alt="{{ $v->gambar }}"  srcset="" class="img-thumbnail rounded-md" style="width:120px">
              </td>
              <td>{{ $v->nama_alat }}</td>
              <td>{{ $v->tipe }}</td>
              
              <td>
                <span class="@if ($v->status == 'sedang digunakan')
                  text-danger
                  @endif text-success"> {{ $v->status }} </span></td>
                  <td>{{ $v->jumlah_ketersedian }}</td>
                  <td>{{ $v->kondisi }}</td>
                  {{-- <td>{{ $v->jumlah_ketersedian }}</td> --}}
              <td>
                <div class="col">
                    <div class="mb-1">
                        <a href="/tool/edit/{{ $v->id }}" class="btn btn-sm btn-warning">Ubah</a>
                        <form action="{{ route('tool.delete', $v->id) }}" method="post">
                          @csrf
                          {{-- <a href="/tool/delete/{{ $v->id }}" class="btn btn-sm btn-danger">Hapus</a> --}}
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                  
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
  </div>
  <div class="container px-5 py-5 bg-white rounded">

    <h3 class="mb-3">Status Penggunaan</h3>
  
    <table class="table table-borderless table-responsive">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Penyewa</th>
            <th scope="col">Nama Alat</th>
            <th scope="col">Lama Penyewaan</th>
            <th scope="col">Total Biaya</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Status Penggunaan</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dataTool as $v)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $v->renter->nama_penyewa }}</td>
              <td>{{ $v->tool->nama_alat }}</td>
              <td>{{ $v->lama_penyewaan }}</td>
              <td>{{ $v->total_biaya }}</td>
              <td>{{ date($v->created_at) }}</td>
              <td>
                @if (!$v->status_penggunaan)
                  <span class="text-success">Selesai digunakan</span>
                  @else
                  <span class="text-danger">Dalam Penggunaan</span>
                @endif  
              </td>
              <td>
                <a href="{{ route('ubah.status.transaction',$v->id) }}" class="btn btn-warning btn-sm">Ubah Status</a>
                @if ($v->status_penggunaan)
                <a href="{{ route('tracking',$v->id) }}" class="btn btn-sm btn-dark mb-2">Tracking Loc</a>
                @endif
              </td>
              
            </tr>
            @endforeach
        </tbody>
      </table>
  </div>

@endsection