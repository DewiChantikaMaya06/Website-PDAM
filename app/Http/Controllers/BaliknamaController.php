<?php

namespace App\Http\Controllers;

use App\Baliknama;
use Illuminate\Http\Request;

class BaliknamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title  = 'Data Balik Nama';
        $data   = Baliknama::orderby('created_at', 'asc')->get();

        return view('baliknama.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        // $data   =   Baliknama::get();
        return view('guest.baliknama');
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
            'nama_sebelumnya' => 'required|max:30',
            'nama_pengaju' => 'required|max:30',
            'no_ktp' => 'required|max:30',
            'alamat' => 'required|max:100',
            'gambar_ktp' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'gambar_rekening' => 'required|mimes:jpg,png,jpeg,gif,svg',
        ], [
            'nama_sebelumnya.required' => 'Nama lengkap harus diisi',
            'nama_sebelumnya.max' => 'Maksimal menggunakan 30 Karakter',
            'nama_pengaju.required' => 'Nama lengkap harus diisi',
            'nama_pengaju.max' => 'Maksimal menggunakan 30 Karakter',
            'no_ktp.required' => 'No Handphone harus diisi',
            'no_ktp.max' => 'Maksimal menggunakan 16 Karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.max' => 'Maksimal 150 karakter',
            'gambar_ktp.required' => 'Gambar harus diisi',
            'gambar_ktp.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'gambar_rekening.required' => 'Gambar harus diisi',
            'gambar_rekening.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
        ]);

        $data['nama_sebelumnya'] = $request->name;
        $data['nama_pengaju'] = $request->name;
        $data['no_ktp'] = $request->no_ktp;
        $data['alamat'] = $request->alamat;
        $data['gambar_ktp'] = $request->foto_ktp->store('baliknama');
        $data['gambar_rekening'] = $request->foto_rek->store('baliknama');
        $data['created_at'] = date('Y-m-d');
        $data['updated_at'] = date('Y-m-d');

        Pengaduan::insert($data);
        return redirect('baliknama/add')->with('sukses', 'isi data sukses ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail Data Baliknama';
        $detail = Baliknama::find($id);
        return view('baliknama.detail', compact('detail','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Baliknama';
        $data = Baliknama::find($id);

        return view('baliknama.edit', compact('title', 'data'));
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
        $this->validate($request,[
            'status'=>'required',
        ],[
            'status.required'=>'Status belum berubah',
        ]);

        $data['status'] = $request->status;

        Pengaduan::where('id', $id)->update($data);
        return redirect('baliknama')->with('suksesUpdate', 'isi data sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
