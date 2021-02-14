<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->simplePaginate(15);
        } else {
            $data_siswa = \App\Siswa::paginate(10);
        }
        $data_siswa = \App\Siswa::paginate(10);
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ], [
            'nama_depan.required' => 'Nama Depan Harus Diisi',
            'nama_depan.min' => 'Nama harus lebih dari 5 karakter',
            'nama_belakang.required' => 'Nama Belakang Harus Diisi',
            'nama_belakang.min' => 'Nama harus lebih dari 5 karakter',
            'jenis_kelamin.required' => 'Jenis Kelamin Harus Dipilih',
            'agama.required' => 'Agama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
        ]);

        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diinput!');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus!');
    }
}
