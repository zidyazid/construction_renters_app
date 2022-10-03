<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 bg-dark">
                <div class="d-inline-block bg-dark" style="height:750px">
                    <h2 class="text-light mt-5">Selamat Datang</h2>
                    <small class="text-light">Silahkan melakukan pendaftaran</small>
                    <img src="{{ asset('assets/images/alatberatcover.png') }}" width="100%" alt="" srcset="">
                </div>
            </div>
            <div class="col-lg-6 px-3 my-5">

                <h3>Sign Up</h3>

                <hr>

                <div class="card shadow bg-white border-0 mx-5 my-3" style="border-radius: 48px">
                  <div class="card-body rounded-xl">
                    <form action="{{ route('store.renter') }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control rounded" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                        @if($errors->has('nama_perusahaan'))
                            <div class="text-danger text-sm">{{ $errors->first('nama_perusahaan') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        @if($errors->has('alamat'))
                            <div class="text-danger text-sm">{{ $errors->first('alamat') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="nama_penyewa">Nama Penyewa</label>
                        <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Nama Penyewa">
                        @if($errors->has('nama_penyewa'))
                          <div class="text-danger text-sm">{{ $errors->first('nama_penyewa') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        @if($errors->has('email'))
                          <div class="text-danger text-sm">{{ $errors->first('email') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="alamat_penyewa">Alamat Penyewa</label>
                        <textarea class="form-control" id="alamat_penyewa" name="alamat_penyewa" rows="3"></textarea>
                        @if($errors->has('alamat_penyewa'))
                          <div class="text-danger text-sm">{{ $errors->first('alamat_penyewa') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="nik">Nik</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik">
                        @if($errors->has('nik'))
                          <div class="text-danger text-sm">{{ $errors->first('nik') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                        @if($errors->has('pekerjaan'))
                          <div class="text-danger text-sm">{{ $errors->first('pekerjaan') }}</div>
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        @if($errors->has('password'))
                          <div class="text-danger text-sm">{{ $errors->first('pekerjaan') }}</div>
                        @endif
                      </div>
                
                      <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                      {{-- <a href="{{ route('store.renter') }}">simpan</a> --}}
                      </div>
                
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>