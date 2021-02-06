<?php

namespace App\Http\Controllers;

use App\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Tarif Air Minum';
        $data = Tarif::orderby('kelompok', 'asc')->get();
        return view('tarif.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $title = 'Tambah Pembukuan';
        return view('tarif.add', compact('title'));
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
            'klasifikasi' => 'required|max:30',
            'kelompok' => 'required',
            'pemakaian1' => 'required|integer|min:1000',
            'pemakaian2' => 'required|integer|min:1000',
            'pemeliharaan' => 'required|integer|min:1000',
            'admin' => 'required|integer|min:1000',
            'denda' => 'required|integer|min:1000',
        ], [
            'klasifikasi.required' => 'Klasifikasi harus diisi',
            'klasifikasi.max' => 'Klasifikasi maksimal 30 huruf',
            'kelompok.required' => 'Kelompok harus diisi',
            'pemakaian1.required' => 'Pemakaian (0-10 m³) harus diisi',
            'pemakaian1.min' => 'Harga Pemakaian (0-10 m³) minimal Rp.1000',
            'pemakaian2.required' => 'Pemakaian (>10 m³) harus diisi',
            'pemakaian2.min' => 'Harga Pemakaian (>10 m³) minimal Rp.1000',
            'pemeliharaan.required' => 'pemeliharaan harus diisi',
            'pemeliharaan.min' => 'Biaya pemeliharaan minimal Rp.1000',
            'admin.required' => 'Biaya admin harus diisi',
            'admin.min' => 'Biaya admin minimal Rp.1000',
            'denda.required' => 'Denda harus diisi',
            'denda.min' => 'Biaya denda minimal Rp.1000',
        ]);

        $data['klasifikasi'] = $request->klasifikasi;
        $data['kelompok'] = $request->kelompok;
        $data['pemakaian1'] = $request->pemakaian1;
        $data['pemakaian2'] = $request->pemakaian2;
        $data['pemeliharaan'] = $request->pemeliharaan;
        $data['admin'] = $request->admin;
        $data['denda'] = $request->denda;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Tarif::insert($data);

        return redirect('tarif')->with('sukses', 'isi kata sukses ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Tarif Air Minum';
        $data = Tarif::find($id);

        return view('tarif.edit', compact('title', 'data'));
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
            'klasifikasi' => 'required|max:30',
            'kelompok' => 'required',
            'pemakaian1' => 'required|integer|min:1000',
            'pemakaian2' => 'required|integer|min:1000',
            'pemeliharaan' => 'required|integer|min:1000',
            'admin' => 'required|integer|min:1000',
            'denda' => 'required|integer|min:1000',
        ], [
            'klasifikasi.required' => 'Klasifikasi harus diisi',
            'klasifikasi.max' => 'Klasifikasi maksimal 30 huruf',
            'kelompok.required' => 'Kelompok harus diisi',
            'pemakaian1.required' => 'Pemakaian (0-10 m³) harus diisi',
            'pemakaian1.min' => 'Harga Pemakaian (0-10 m³) minimal Rp.1000',
            'pemakaian2.required' => 'Pemakaian (>10 m³) harus diisi',
            'pemakaian2.min' => 'Harga Pemakaian (>10 m³) minimal Rp.1000',
            'pemeliharaan.required' => 'pemeliharaan harus diisi',
            'pemeliharaan.min' => 'Biaya pemeliharaan minimal Rp.1000',
            'admin.required' => 'Biaya admin harus diisi',
            'admin.min' => 'Biaya admin minimal Rp.1000',
            'denda.required' => 'Denda harus diisi',
            'denda.min' => 'Biaya denda minimal Rp.1000',
        ]);

        $data['klasifikasi'] = $request->klasifikasi;
        $data['kelompok'] = $request->kelompok;
        $data['pemakaian1'] = $request->pemakaian1;
        $data['pemakaian2'] = $request->pemakaian2;
        $data['pemeliharaan'] = $request->pemeliharaan;
        $data['admin'] = $request->admin;
        $data['denda'] = $request->denda;
        $data['updated_at'] = date('Y-m-d H:1:s');

        Tarif::where('id', $id)->update($data);

        return redirect('tarif')->with('suksesUpdate', 'isi kata sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tarif::find($id);
        $data->delete();
        return redirect('tarif')->with('suksesHapus', 'isi kata sukses dihapus');
    }
}
