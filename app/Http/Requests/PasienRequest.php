<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_asuransi' => 'required|max:255',
            'perusahaan_asuransi' => 'required|max:255',
            'nik' => 'required|max:255',
            'no_rekam_medis' => 'required|max:255',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'no_wa' => 'required|max:255',
            'gol_darah' => 'required|max:10',
            'alergi_obat' => 'required|max:255',
            'alergi_makanan' => 'required|max:255',
            'resiko_medis' => 'required|max:255',
            'berat_badan' => 'required|max:10',
            'tinggi_badan' => 'required|max:10',
            'barcode_link' => 'nullable'
        ];
    }
}
