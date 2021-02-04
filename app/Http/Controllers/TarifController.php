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
    public function store()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $a['klasifikasi'] = $request->klasifikasi;
        $a['kelompok'] = $request->kelompok;
        $a['pemakaian1'] = $request->pemakaian1;
        $a['pemakaian2'] = $request->pemakaian2;
        $a['pemeliharaan'] = $request->pemeliharaan;
        $a['admin'] = $request->admin;
        $a['denda'] = $request->denda;
        $a['created_at'] = date('Y-m-d H:1:s');
        $a['updated_at'] = date('Y-m-d H:1:s');


        Tarif::create($a);

        $this->validate($request, [
            'klasifikasi' => 'required|max:30',
            'kelompok' => 'required',
            'pemakaian1' => 'required|min:1000',
            'pemakaian2' => 'required|min:1000',
            'pemeliharaan' => 'required|min:1000',
            'admin' => 'required|min:1000',
            'denda' => 'required|min:1000',
        ]);
        return redirect('/tarif')->with('sukses', 'Data berhasil diinput!');
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
    public function destroy($id)
    {
        //
    }
}
