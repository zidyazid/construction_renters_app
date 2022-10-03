@extends('layout')

@section('content')

    <div class="container py-3 px-3 bg-white rounded">
        <h3>Data Penyewa</h3>

        <table class="table table-responsive my-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Nama Penyewa</th>
                    <th>Alamat Penyewa</th>
                    <th>Nik</th>
                    <th>Perkerjaan</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($renterData as $v)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->nama_perusahaan }}</td>
                        <td>{{ $v->alamat }}</td>
                        <td>{{ $v->nama_penyewa }}</td>
                        <td>{{ $v->alamat_penyewa }}</td>
                        <td>{{ $v->nik }}</td>
                        <td>{{ $v->pekerjaan }}</td>
                        <td class="text-success"><strong>{{ $v->status }}</strong></td>
                        <td>{{ $v->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Data Tidak Ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection