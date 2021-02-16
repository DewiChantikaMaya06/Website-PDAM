<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Berita PDAM';
        $data = Berita::orderby('judul', 'asc')->paginate(10);
        return view('berita.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $title = 'Tambah Informasi / Berita';
        return view('berita.add', compact('title'));
    }

    public function backup()
    {
        $title = 'Data Backup Berita';
        $data = Berita::onlyTrashed()->paginate(10);
        return view('berita.backup', compact('data', 'title'));
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
            'sumber' => 'required|max:100',
            'gambar_berita' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'isi_berita' => 'required|max:5000',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Maksimal menggunakan 30 karakter',
            'sumber.required' => 'sumber harus diisi',
            'sumber.max' => 'Maksimal menggunakan 100 karakter',
            'gambar_berita.required' => 'Gambar harus diisi',
            'gambar_berita.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'isi_berita.required' => 'Berita harus diisi',
            'isi_berita.max' => 'Maksimal menggunakan 5000 karakter',
        ]);

        $data['judul'] = $request->judul;
        $data['sumber'] = $request->sumber;
        $data['gambar_berita'] = $request->gambar_berita->store('berita');
        $data['isi_berita'] = $request->isi_berita;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Berita::insert($data);

        return redirect('berita')->with('sukses', 'isi kata sukses ditambah');
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
        $title = 'Edit Data Berita';
        $data = Berita::find($id);

        return view('berita.edit', compact('title', 'data'));
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
            'sumber' => 'required|max:100',
            'gambar_berita' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'isi_berita' => 'required|max:5000',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Maksimal menggunakan 30 karakter',
            'sumber.required' => 'sumber harus diisi',
            'sumber.max' => 'Maksimal menggunakan 100 karakter',
            'gambar_berita.required' => 'Gambar harus diisi',
            'gambar_berita.mimes' => 'File Harus berupa gambar. Type jpg,png,jpeg,giv,svg',
            'isi_berita.required' => 'Berita harus diisi',
            'isi_berita.max' => 'Maksimal menggunakan 5000 karakter',
        ]);

        $data['judul'] = $request->judul;
        $data['sumber'] = $request->sumber;
        $data['gambar_berita'] = $request->gambar_berita->store('berita');
        $data['isi_berita'] = $request->isi_berita;
        $data['created_at'] = date('Y-m-d H:1:s');
        $data['updated_at'] = date('Y-m-d H:1:s');

        Berita::where('id', $id)->update($data);

        return redirect('berita')->with('suksesUpdate', 'isi kata sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::find($id);
        $data->delete();
        return redirect('berita')->with('suksesHapus', 'isi kata sukses dihapus');
    }

    public function restore($id)
    {
        $data = Berita::onlyTrashed()->where('id', $id);
        $data->restore();
        return redirect('berita/backup')->with('suksesRestore', 'isi kata sukses direstore');
    }

    public function deletePermanen($id)
    {
        $data = Berita::onlyTrashed()->where('id', $id);
        $data->forceDelete();
        return redirect('berita/backup')->with('suksesDelete', 'isi kata sukses didelete');
    }

}
