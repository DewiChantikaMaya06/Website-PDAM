<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Galeri kegiatan PDAM';
        $data = Kegiatan::orderby('judul', 'asc')->get();
        return view('kegiatan.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $title = 'Tambah Galeri Kegiatan';
        return view('kegiatan.add', compact('title'));
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
            'judul' => 'required|max:30',
            'gambar_kegiatan' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Maksimal menggunakan 30 karakter',
            'gambar_kegiatan.required' => 'Gambar harus diisi',
            'gambar_kegiatan.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        $data['judul'] = $request->judul;
        $data['gambar_kegiatan'] = $request->gambar_kegiatan->store('kegiatan');
        $data['deskripsi'] = $request->deskripsi;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Kegiatan::insert($data);

        return redirect('kegiatan')->with('sukses', 'isi kata sukses ditambah');
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
        $title = 'Edit Data Galeri Kegiatan';
        $data = Kegiatan::find($id);

        return view('kegiatan.edit', compact('title', 'data'));
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
            'judul' => 'required|max:30',
            'judul.max' => 'Maksimal menggunakan 30 karakter',
            'gambar_kegiatan' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'gambar_kegiatan.required' => 'Gambar harus diisi',
            'gambar_kegiatan.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        $data['judul'] = $request->judul;
        $data['gambar_kegiatan'] = $request->gambar_kegiatan->store('kegiatan');
        $data['deskripsi'] = $request->deskripsi;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Kegiatan::where('id', $id)->update($data);

        return redirect('kegiatan')->with('suksesUpdate', 'isi kata sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kegiatan::find($id);
        $data->delete();
        return redirect('kegiatan')->with('suksesHapus', 'isi kata sukses dihapus');
    }
}
