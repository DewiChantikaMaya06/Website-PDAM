@extends('layouts.master')

@section ('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Dashboard Admin</h3>
                    <p class="panel-subtitle">Jam Kerja : Senin-Sabtu</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="lnr lnr-apartment"></i></span>
                                <p>
                                    <span class="number">{{$data->unit}}</span>
                                    <span class="title">Units</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                <p>
                                    <span class="number">{{$data->pegawai}}</span>
                                    <span class="title">Pegawai</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-eye"></i></span>
                                <p>
                                    <span class="number">{{$data->pengguna}}</span>
                                    <span class="title">Pengguna</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                <p>
                                    <span class="number">1991</span>
                                    <span class="title">Tahun Berdiri</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">System Load</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="system-load" class="easy-pie-chart" data-percent="70">
                        <span class="percent">70</span>
                    </div>
                    <h4>CPU Load</h4>
                    <ul class="list-unstyled list-justify">
                        <li>High: <span>95%</span></li>
                        <li>Average: <span>87%</span></li>
                        <li>Low: <span>20%</span></li>
                        <li>Threads: <span>996</span></li>
                        <li>Processes: <span>259</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop