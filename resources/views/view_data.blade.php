<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet">      

    
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
  <div class="row mt-3">
    <div class="col-sm d-flex justify-content-center">
        <div class="card w-100">  
        <div class="card-header">
        DATA PASIEN
            </div>
            <div class="card-body">
            <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php $no=1 @endphp
                @forelse ($items as $item)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td> 
                    <div class="float-left ml-1">
                    <a class="btn btn-sm btn-info" href="{{ route('pasiens.edit', $item->id) }}">
                        <i class="material-icons">edit</i> </a>
                    </div>
                    <div class="float-left ml-1">
                    <a class="btn btn-sm btn-success" href="{{ route('pasiens.detail', $item->id) }}">
                        <i class="material-icons">details</i> </a>
                    </div>
                    
                    <div class="float-left ml-1">
                    <a class="btn btn-sm btn-warning" href="{{ route('pasiens.show', $item->id) }}">
                        <i class="material-icons">print</i> </a>
                    </div>
                    
                    <div class="float-left ml-1">
                    <form action="{{ route('pasiens.destroy', $item->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger"><i class="material-icons">delete</i></button>
                        </form>
                    </div>                
                    </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>

            <span class="mdi mdi-fsce"></span>

            </div>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <a href="{{ route('pasiens.create') }}" class="ml-3 mb-3"> Tambah Data </a>
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