<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data=Info::get();
        return view('dashboard.index', compact('data'));
    }

    // public functin store (Request $request)
    // {
    //     $data['unit'] = $request->unit;
    //     $data['pegawai'] = $request->pegawai;
    //     $data['pengguna'] = $request->pengguna;
    //     $data['created_at'] = date('Y-m-d H:1:s');
    //     $data['updated_at'] = date('Y-m-d H:1:s');
    // }
}
