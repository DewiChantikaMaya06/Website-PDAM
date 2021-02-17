<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data=Info::find(1);
        return view('dashboard.index', compact('data'));
    }
}
