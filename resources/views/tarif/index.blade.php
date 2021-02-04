@extends('layouts.master')

@section ('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4>{{ $title }}</h4>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class='table-responsive'>
                                <table class='table myTable'>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Klasifikasi</th>
                                            <th>Kelompok</th>
                                            <th>0-10 m3</th>
                                            <th>>0-10 m3</th>
                                            <th>Pemeliharaan</th>
                                            <th>Admin</th>
                                            <th>Denda</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $e=>$dt)
                                        <tr>
                                            <td>{{$e+1}}</td>
                                            <td>{{$dt->klasifikasi}}</td>
                                            <td>{{$dt->kelompok}}</td>
                                            <td>{{$dt->pemakaian1}}</td>
                                            <td>{{$dt->pemakaian2}}</td>
                                            <td>{{$dt->pemeliharaan}}</td>
                                            <td>{{$dt->admin}}</td>
                                            <td>{{$dt->denda}}</td>
                                            <td>
                                                <a href='{{ url('tarif/'.$dt->id) }}' class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td>
                                                <button href='{{ url('tarif/'.$dt->id) }}' class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tarif Air Minum</h5>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/tarif/create" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Klasifikasi</label>
                        <input name="klasifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Klasifikasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Kelompok</label>
                        <select name="kelompok" class="form-control" id="exampleFormControlSelect1">
                            <option value="A1">A1 (Sosial Umum)</option>
                            <option value="A2">A2 (Sosial Umum)</option>
                            <option value="A3">A3 (Sosial Rumah Tangga)</option>
                            <option value="B1">B1 (Rumah Tangga)</option>
                            <option value="B2">B2 (Rumah Tangga)</option>
                            <option value="B3">B3 (Instansi Pemerintah)</option>
                            <option value="C1">C1 (Niaga Kecil)</option>
                            <option value="C2">C2 (Niaga Besar)</option>
                            <option value="D1">D1 (Industri Kecil)</option>
                            <option value="D2">D2 (Industri Besar)</option>
                            <option value="E1">E1 (Non Komersial)</option>
                            <option value="E2">E2 (Komersail)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pemakaian (0-10 m³)</label>
                        <input name="pemakaian1" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0-10 m³">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pemakaian (>10 m³)</label>
                        <input name="pemakaian2" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=">10 m³">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pemeliharaan</label>
                        <input name="pemeliharaan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pemeliharaan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin</label>
                        <input name="admin" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Denda</label>
                        <input name="denda" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Denda">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection