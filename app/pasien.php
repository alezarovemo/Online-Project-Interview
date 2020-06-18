<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $fillable = [
        'no_asuransi', 'perusahaan_asuransi', 'nik', 'no_rekam_medis',
        'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat',
        'no_hp', 'no_wa', 'gol_darah', 'alergi_obat', 'alergi_makanan', 
        'resiko_medis', 'berat_badan', 'tinggi_badan', 'barcode_link'
    ];

    protected $hidden = [];
}
