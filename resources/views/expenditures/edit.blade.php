@extends('layout')

@section('content')
    <div class="container px-3 py-3">
        <div class="card mx-3 my-3">
            <div class="card-header">
                <h3>Tambah Data Pengeluaran</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('expenditure.update', $expenditureEdit->id) }}">
                    @csrf
                    <div class="form-group mb-3">
                      <label for="tag">Tag</label>
                      <input type="text" class="form-control" id="tag" name="tag" value="{{ $expenditureEdit->tag }}" placeholder="Tag">
                    </div>
                    <div class="form-group mb-3">
                      <label for="tujuan">Tujuan</label>
                      <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $expenditureEdit->tujuan }}" placeholder="Tujuan">
                    </div>
                    <div class="form-group mb-3">
                      <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $expenditureEdit->keterangan }}" placeholder="Keterangan">
                    </div>
                    <div class="form-group mb-3">
                      <label for="total_biaya">Total Biaya</label>
                      <input type="number" class="form-control" id="total_biaya" name="total_biaya" value="{{ $expenditureEdit->total_biaya }}" placeholder="Total Biaya">
                    </div>

                    <button type="submit" class="btn btn-warning">Ubah</button>

                </form>
            </div>
        </div>
    </div>
@endsection