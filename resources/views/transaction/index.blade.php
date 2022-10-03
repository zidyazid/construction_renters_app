@extends('layout')

@section('content')
<div class="container py-3 px-3 bg-white rounded">

    @include('components.alert')

    <h3>Transaksi</h3>

    <form action="{{ route('store.transaction') }}" method="post">
        @csrf
        <div class="form-group mt-3">
          <label for="nik">Nik Penyewa</label>
          <input type="text" class="form-control" id="nik" name="nik" value="{{ $nik }}" placeholder="Nama Perusahaan">
            @if($errors->has('nik'))
                <div class="text-danger text-sm">{{ $errors->first('nik') }}</div>
            @endif
        </div>
        <div class="form-group mt-3">
            <label for="loc_id">Daerah Penggunaan</label>
            <select class="form-control" id="loc_id" name="loc_id">
                @foreach ($loc as $v)
                    <option value="{{ $v->id }}">{{ $v->nama_lokasi }}</option>
                @endforeach
            </select>
            @if($errors->has('id_tool'))
                <div class="text-danger text-sm">{{ $errors->first('id_tool') }}</div>
            @endif
        </div>
        <div class="form-group mt-3">
            <label for="id_tool">Alat Berat Yang diSewa</label>
            <select class="form-control" id="id_tool" name="id_tool">
                @foreach ($tool as $v)
                    <option value="{{ $v->id }}">{{ $v->nama_alat }}</option>
                @endforeach
            </select>
            @if($errors->has('id_tool'))
                <div class="text-danger text-sm">{{ $errors->first('id_tool') }}</div>
            @endif
        </div>
        <div class="form-group mt-3">
            <label for="lama_penyewaan">Lama Penyewaan</label>
            <input type="number" class="form-control" id="lama_penyewaan" name="lama_penyewaan" placeholder="Lama Penyewaan">
            @if($errors->has('lama_penyewaan'))
                <div class="text-danger text-sm">{{ $errors->first('lama_penyewaan') }}</div>
            @endif
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

</div>    
@endsection