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
        $title2  = 'Data Balik Nama Selesai';
        $data   = Baliknama::orderby('created_at', 'asc')->where('status', '=', 'Belum verifikasi')->paginate(5);
        $data2   = Baliknama::where('status', '=', 'Verifikasi')->paginate(5);

        return view('baliknama.index', compact('data', 'title', 'data2', 'title2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
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
            'no_hp' =>  'required|max:13',
            'gambar_ktp' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'gambar_rekening' => 'required|mimes:jpg,png,jpeg,gif,svg',
        ], [
            'nama_sebelumnya.required' => 'Nama lengkap harus diisi',
            'nama_sebelumnya.max' => 'Maksimal menggunakan 30 Karakter',
            'nama_pengaju.required' => 'Nama lengkap harus diisi',
            'nama_pengaju.max' => 'Maksimal menggunakan 30 Karakter',
            'no_ktp.required' => 'No KTP harus diisi',
            'no_ktp.max' => 'Maksimal menggunakan 16 Karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.max' => 'Maksimal 150 karakter',
            'no_hp.required'  =>  'No Handphone wajib diisi',
            'no_hp.max' =>  'Maksimal 13 karakter',
            'gambar_ktp.required' => 'Gambar harus diisi',
            'gambar_ktp.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'gambar_rekening.required' => 'Gambar harus diisi',
            'gambar_rekening.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
        ]);

        $data['nama_sebelumnya'] = $request->nama_sebelumnya;
        $data['nama_pengaju'] = $request->nama_pengaju;
        $data['no_ktp'] = $request->no_ktp;
        $data['alamat'] = $request->alamat;
        $data['no_hp']  =   $request->no_hp;
        $data['gambar_ktp'] = $request->gambar_ktp->store('ktp_baliknama');
        $data['gambar_rekening'] = $request->gambar_rekening->store('rekening');
        $data['created_at'] = date('Y-m-d');
        $data['updated_at'] = date('Y-m-d');

        Baliknama::insert($data);
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
        $title = 'Detail Data Balik Nama';
        $detail = Baliknama::find($id);
        return view('baliknama.detail', compact('detail', 'title'));
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
        $this->validate($request, [
            'status' => 'required',
        ], [
            'status.required' => 'Status belum berubah',
        ]);

        $data['status'] = $request->status;

        Baliknama::where('id', $id)->update($data);
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
        $data = Baliknama::find($id);
        $data->delete();
        return redirect('baliknama')->with('suksesHapus', 'isi kata sukses dihapus');
    }
}
