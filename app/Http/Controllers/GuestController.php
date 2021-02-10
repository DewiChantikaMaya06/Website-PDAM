<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Tarif;
use App\Berita;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kegiatan = Kegiatan::orderby('judul', 'asc')->get();
        $data_tarif = Tarif::orderby('kelompok', 'asc')->get();
        $data_berita = Berita::orderby('judul', 'asc')->get();
        return view('guest.index', compact('data_tarif', 'data_kegiatan', 'data_berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_kegiatan = Kegiatan::find($id);
        return view('guest.detailfoto', compact('detail_kegiatan'));
    }

    public function ShowBerita($id)
    {
        $detail_berita = Berita::find($id);
        $data_berita = Berita::get();
        return view('guest.detailberita', compact('detail_berita','data_berita'));
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
