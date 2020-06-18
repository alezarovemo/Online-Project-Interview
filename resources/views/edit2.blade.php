<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Online Project Interview</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Online Project Interview
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
  </nav>
  <div class="container-fluid">
  <div class="row mt-5">
    <div class="col-sm d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-white rounded w-100" style="width: 5rem;">
            <div class="card-header">
            IDENTITAS PASIEN
            </div>
            <div class="card-body">
                <h5 class="card-title">Info Pasien</h5>
                <div class="shadow p-3 mb-1 bg-white rounded">
                <div class="row">
                    <div class="col">
                            <div class="form-group">
                                <label for="">Nomor Asuransi</label>
                                <input type="text" class="form-control" name="no_asuransi" value="{{ $item-> no_asuransi }}" disabled>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Perusahaan Asuransi</label>
                                <input type="text" class="form-control" name="perusahaan_asuransi" value="{{ $item-> perusahaan_asuransi }}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Nomor KK / KTP</label>
                                <input type="text" class="form-control" name="nik" value="{{ $item-> nik }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Rekam Medis</label>
                                <input type="text" class="form-control" name="no_rekam_medis" value="{{ $item-> no_rekam_medis }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ $item-> nama }}" disabled>
                            </div>
                            <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="nama" value="{{ $item-> jenis_kelamin }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $item-> tempat_lahir }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $item-> tgl_lahir }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" rows="3" cols="100" disabled>
                            {{ $item-> alamat }}
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="">Nomor Handphone</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ $item-> no_hp }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Whatapps</label>
                            <input type="text" class="form-control" name="no_wa" value="{{ $item-> no_wa }}" disabled>
                        
                            <input type="hidden" class="form-control" name="barcode_link" value="{{ url("/pasiens/{$item->id}/detail") }}">
                        </div>

                        <h4 class="mt-4" >Info Medis</h4>
                        
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <input type="text" class="form-control" name="alergi_obat" value="{{ $item-> gol_darah }}" disabled>
                            
                        </div>
                        <div class="form-group">
                            <label for="">Alergi Obat</label>
                            <input type="text" class="form-control" name="alergi_obat" value="{{ $item-> alergi_obat }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Alergi Makanan</label>
                            <input type="text" class="form-control" name="alergi_makanan" value="{{ $item-> alergi_makanan }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Resiko Medis</label>
                            <input type="text" class="form-control" name="resiko_medis" value="{{ $item-> resiko_medis }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Berat Badan</label>
                            <input type="text" class="form-control" name="berat_badan" value="{{ $item-> berat_badan }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tinggi Badan</label>
                            <input type="text" class="form-control" name="tinggi_badan" value="{{ $item-> tinggi_badan }}" disabled>
                        </div>
                        <div class="form-group">
                        <a class="btn btn-sm btn-info btn-block" href="{{ route('pasiens.edit', $item->id) }}">
                        Edit Data Pasien</a>
                        </div>
                    </div>
                </div>
                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url()); !!}
                </div>
          
            </div>
        </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>