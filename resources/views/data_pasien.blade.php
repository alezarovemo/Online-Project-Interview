<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .page-break {
        page-break-after: always;
    }
    </style>
    <title>Online Project Interview</title>
  </head>
  
  <body>

  <div class="text-center">
  <img src="data:image/svg;base64, {{ base64_encode(QrCode::format('svg')->size(100)->generate($item->barcode_link)) }} ">  
  </div>
  <div class="container-fluid">

  <h6>IDENTITAS PASIEN</h6>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
    <table class="table table-striped">  
        <tbody>
            <tr>
            <td>Nomor Asuransi</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> no_asuransi }}</td>
            </tr>

            <tr>
            <td>Nama Perusahaan Asuransi</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> perusahaan_asuransi }}</td>
            </tr>

            <tr>
            <td>Nomor KK / KTP</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> nik }}</td>
            </tr>

            <tr>
            <td>Nomor Rekam Medis</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> no_rekam_medis }}</td>
            </tr>

            <tr>
            <td>Nama Lengkap</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> nama }}</td>
            </tr>

            <tr>
            <td>Jenis Kelamin</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> jenis_kelamin }}</td>
            </tr>

            <tr>
            <td>Tempat Lahir</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> tempat_lahir }}</td>
            </tr>

            <tr>
            <td>Tanggal Lahir</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> tgl_lahir }}</td>
            </tr>

            <tr>
            <td>Alamat Lengkap</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> alamat }}</td>
            </tr>

            <tr>
            <td>Nomor handphone</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> no_hp }}</td>
            </tr>

            <tr>
            <td>Nomor Whatapps</td>
            </tr>

            <tr>
            <td class="font-weight-bold">{{ $item-> no_wa }}</td>
            
            </tr>           
        </tbody>
    </table>
    
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