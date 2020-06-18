<?php

namespace App\Http\Controllers;

use App\pasien;
use App\Http\Requests\PasienRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PDF;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $items = pasien::all();
        return view('view_data')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienRequest $request)
    {
        $data = $request->all();

        pasien::create($data);
        return redirect()->route('pasiens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = pasien::findOrFail($id);
        
        $pdf = PDF::loadview('data_pasien', ['item' => $item]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = pasien::findOrFail($id);

        $ha = Crypt::encryptString($item);

        return view('edit')->with([
            'item' => $item,
            'ha' => $ha
        ]);
    }

    public function detail($id)
    {
        $item = pasien::findOrFail($id);

        $ha = Crypt::encryptString($item);

        return view('edit2')->with([
            'item' => $item,
            'ha' => $ha
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PasienRequest $request, $id)
    {
        $data = $request->all();

        $item = pasien::findOrFail($id);
        $item->update($data);

        return redirect()->route('pasiens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = pasien::findOrFail($id);
        $item->delete();

        return redirect()->route('pasiens.index');
    }

}
