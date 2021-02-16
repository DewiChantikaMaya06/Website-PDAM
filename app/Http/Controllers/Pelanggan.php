<?php

namespace App\Http\Controllers;

use App\Tagihan;
use Illuminate\Http\Request;

class Pelanggan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title  = "Data Tagihan";
        $data   = Tagihan::orderby('no_pelanggan','asc')->get();
        return view('tagihan.index', compact('title','data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $title  = "Tambah Data Tagihan";
        return view('tagihan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'alamat' => 'required',
            'no_sambungan' => 'required|max:50',
            'jumlah_rekening' => 'required',
            'tagihan_air' => 'required',
            'denda' => 'required',
            'segel' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'nama.max'  =>  'Maksimal 50 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'no_sambungan.required' => 'No. Sambungan harus diisi',
            'no_sambungan.max' => 'Maksimal 50 karakter',
            'jumlah_rekening.required' => 'Jumlah Rekening harus diisi',
            'tagihan_air.required' => 'Tagihan Air harus diisi',
            'denda.required' => 'Denda harus diisi',
            'segel.required' => 'Segel harus diisi',
        ]);

        $data['no_pelanggan']  = rand(7);
        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['no_sambungan'] = $request->no_sambungan;
        $data['jumlah_rekening'] = $request->jumlah_rekening;
        $data['tagihan_air'] = $request->tagihan_air;
        $data['denda']  = $request->denda;
        $data['segel']  =   $request->segel;
        $data['total_tagihan']  =  ($request->tagihan_air + $request->denda + $request->segel);

        Tagihan::insert($data);
        return redirect('tagihan')->with('sukses', 'isi data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_pelanggan)
    {
        $title = 'Detail Tagihan';
        $detail = Tagihan::find($no_pelanggan);
        return view('tagihan.detail', compact('detail', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_pelanggan)
    {
        $data = Tagihan::find($no_pelanggan);
        $data->delete();
        return redirect('tagihan')->with('suksesHapus', 'isi kata sukses dihapus');
    }
}
