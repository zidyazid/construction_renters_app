@extends('layout')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Penghasilan</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Pemasukan</th>
                                <th scope="col">Total Pengeluaran</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $v)
                                <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $v->transactions_date }}</td>
                                  <td>{{ $v->totalBiayaTransaksiHarian }}</td>
                                  <td>{{ $v->totalPengeluaranHarian }}</td>
                                  <td>{{ $v->totalBiayaTransaksiHarian - $v->totalPengeluaranHarian  }}</td>
                                </tr>
                                @endforeach
                              
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($totalTransaksiHarian as $v)
                                <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $v->tanggal }}</td>
                                  <td>{{ $v->total_biaya }}</td>
                                </tr>
                                @endforeach
                              
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengeluaran</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">tujuan</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Pengeluaran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($totalPengeluaranHarian as $v)
                                <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $v->tujuan }}</td>
                                  <td>{{ $v->keterangan }}</td>
                                  <td>{{ $v->tanggal }}</td>
                                  <td>{{ $v->total_biaya }}</td>
                                </tr>
                                @endforeach                   
                          </table>
                    </div>
                </div>
            </div>
        
        </div>
    </div>


@endsection