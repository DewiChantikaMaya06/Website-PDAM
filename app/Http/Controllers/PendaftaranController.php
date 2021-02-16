<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title  =   'Data Pendaftaran Sambung Kilat';
        $title2  =   'Data Pendaftaran Sambung Kilat Selesai';
        $data   =   Pendaftaran::where('status', '=', 'Belum verifikasi')->paginate(5);
        $data2   =   Pendaftaran::where('status', '=', 'Verifikasi')->paginate(5);

        return view('pendaftaran.index', compact('data', 'title', 'title2', 'data2'));
    }

    public function tambah()
    {
        // $data   =   Pendaftaran::get();
        return view('guest.pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'  =>  'required|max:50',
            'no_ktp'    =>  'required|max:16',
            'alamat'  =>  'required|max:100',
            'rt'  =>  'required|max:5',
            'rw'  =>  'required|max:5',
            'no_hp'  =>  'required|max:13',
            'gambar_ktp'  =>  'required|mimes:jpg,png,jpeg,gif,svg',
        ], [
            'nama.required' =>  'Nama harus diisi',
            'nama.max'  =>  'Maksimal 50 karakter',
            'no_ktp.required'   =>  'No. KTP harus diisi',
            'no_ktp.max'    =>  'Maksimal 16 karakter',
            'alamat.required'   =>  'Alamat harus diisi',
            'alamat.max'    =>  'Maksimal 100 karakter',
            'rt.required'   =>  'RT wajib diisi',
            'rw.required'   =>  'RW wajib diisi',
            'rt.max'    =>  'Maksimal 5 karakter',
            'rw.max'    =>  'Maksimal 5 karakter',
            'no_hp.required'    =>  'No. Handphone harus diisi',
            'no_hp.max' =>  'Maksimal 13 karakter',
            'gambar_ktp.required'   =>  'Gambar KTP harus diisi',
            'gambar_ktp.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
        ]);

        $data['nama']   =   $request->nama;
        $data['no_ktp']   =   $request->no_ktp;
        $data['alamat']   =   $request->alamat;
        $data['rt']   =   $request->rt;
        $data['rw']   =   $request->rw;
        $data['no_hp']   =   $request->no_hp;
        $data['gambar_ktp']   =   $request->gambar_ktp->store('ktp');
        $data['created_at'] = date('Y-m-d');
        $data['updated_at'] = date('Y-m-d');

        Pendaftaran::insert($data);
        return redirect('pendaftaran/tambah')->with('sukses', 'isi data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title  =   'Detail Data Pendaftaran';
        $detail =   Pendaftaran::find($id);
        return view('pendaftaran.detail', compact('detail', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Pendaftaran';
        $data = Pendaftaran::find($id);

        return view('pendaftaran.edit', compact('title', 'data'));
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

        Pendaftaran::where('id', $id)->update($data);
        return redirect('pendaftaran')->with('suksesUpdate', 'isi data sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pendaftaran::find($id);
        $data->delete();
        return redirect('pendaftaran')->with('suksesHapus', 'isi kata sukses dihapus');
    }
}
