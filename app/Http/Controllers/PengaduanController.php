<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title  = 'Data Pengaduan';
        $title2  = 'Data Pengaduan Selesai';

        $data   = Pengaduan::orderby('created_at', 'asc')->where('status', '=', 'Belum')->get();
        $data_status   = Pengaduan::where('status', '=', 'Selesai')->get();

        return view('pengaduan.index', compact('data', 'title', 'data_status', 'title2'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data   =   Pengaduan::get();
        return view('guest.pengaduan', compact('data'));
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
            'alamat' => 'required|max:150',
            'no_hp' => 'required|max:13',
            'no_pelanggan' => 'required|max:30',
            'jenis' => 'required',
            'kerusakan' => 'required',
            'isi_pengaduan' => 'required|max:500',
        ], [
            'nama.required' => 'Nama lengkap harus diisi',
            'nama.max' => 'Maksimal menggunakan 50 Karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.max' => 'Maksimal 150 karakter',
            'no_hp.required' => 'No Handphone harus diisi',
            'no_hp.max' => 'Maksimal menggunakan 13 Karakter',
            'no_pelanggan.required' => 'No Handphone harus diisi',
            'no_pelanggan.max' => 'Maksimal menggunakan 30 Karakter',
            'jenis.required' => 'Jenis harus diisi',
            'kerusakan.required' => 'Tanggal kerusakan harus diisi',
            'isi_pengaduan.required' => 'Isi pengaduan harus diisi',
            'isi_pengaduan.max' => 'Maksimal menggunakan 500 Karakter',
        ]);

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['no_hp'] = $request->no_hp;
        $data['no_pelanggan'] = $request->no_pelanggan;
        $data['jenis'] = $request->jenis;
        $data['kerusakan'] = $request->kerusakan;
        $data['isi_pengaduan'] = $request->isi_pengaduan;
        $data['created_at'] = date('Y-m-d');
        $data['updated_at'] = date('Y-m-d');

        Pengaduan::insert($data);
        return redirect('pengaduan/add')->with('sukses', 'isi data sukses ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail Data Pengaduan';
        $detail = Pengaduan::find($id);
        return view('pengaduan.detail', compact('detail', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Pengaduan';
        $data = Pengaduan::find($id);

        return view('pengaduan.edit', compact('title', 'data'));
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

        Pengaduan::where('id', $id)->update($data);
        return redirect('pengaduan')->with('suksesUpdate', 'isi data sukses diupdate');
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
