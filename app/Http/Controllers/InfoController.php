<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Info PDAM';
        $data = Info::paginate(10);
        $flag = false;
        return view('info.index', compact('data', 'title', 'flag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $title = 'Tambah Data Baru';
        return view('info.add', compact('title'));
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
            'unit' => 'required|integer|min:1',
            'pegawai' => 'required|integer|min:1',
            'pengguna' => 'required|integer|min:1',
        ], [
            'unit.required' => 'Jumlah unit harus diisi',
            'unit.integer' => 'Data harus merupakan angka',
            'unit.min' => 'Minimal data ada 1',
            'pegawai.required' => 'Jumlah pegawai harus diisi',
            'pegawai.integer' => 'Data harus merupakan angka',
            'pegawai.min' => 'Minimal data ada 1',
            'pengguna.required' => 'Jumlah pengguna harus diisi',
            'pengguna.integer' => 'Data harus merupakan angka',
            'pengguna.min' => 'Minimal data ada 1',

        ]);

        $data['unit'] = $request->unit;
        $data['pegawai'] = $request->pegawai;
        $data['pengguna'] = $request->pengguna;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Info::insert($data);

        return redirect('info')->with('sukses', 'isi kata sukses ditambah');
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
        $title = 'Edit Data Info PDAM';
        $data = Info::find($id);

        return view('info.edit', compact('title', 'data'));
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
            'unit' => 'required|integer|min:1',
            'pegawai' => 'required|integer|min:1',
            'pengguna' => 'required|integer|min:1',
        ], [
            'unit.required' => 'Jumlah unit harus diisi',
            'unit.integer' => 'Data harus merupakan angka',
            'unit.min' => 'Minimal data ada 1',
            'pegawai.required' => 'Jumlah pegawai harus diisi',
            'pegawai.integer' => 'Data harus merupakan angka',
            'pegawai.min' => 'Minimal data ada 1',
            'pengguna.required' => 'Jumlah pengguna harus diisi',
            'pengguna.integer' => 'Data harus merupakan angka',
            'pengguna.min' => 'Minimal data ada 1',

        ]);

        $data['unit'] = $request->unit;
        $data['pegawai'] = $request->pegawai;
        $data['pengguna'] = $request->pengguna;
        $data['updated_at'] = date('Y-m-d H:1:s');

        Info::where('id', $id)->update($data);

        return redirect('info')->with('suksesUpdate', 'isi kata sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Info::find($id);
        $data->delete();
        $flag = false;
        return redirect('info')->with(['flag' => $flag]);
    }
}
