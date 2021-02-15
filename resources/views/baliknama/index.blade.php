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
                        </div>
                        @if(session('sukses'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <i class="fa fa-check-circle"></i> Data berhasil di input...
                        </div>
                        @elseif(session('suksesUpdate'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <i class="fa fa-check-circle"></i> Data berhasil di Update!
                        </div>
                        @elseif(session('suksesHapus'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <i class="fa fa-trash-o"></i> Data berhasil di Hapus.
                        </div>
                        @endif
                        <div class="panel-body">
                            <div class='table-responsive'>
                                <table class='table myTable'>
                                    <thead>
                                        <tr>
                                            <th>Nama Sebelumnya</th>
                                            <th>Nama Pengaju</th>
                                            <th>No.KTP</th>
                                            <th>Alamat</th>
                                            <th>Foto KTP</th>
                                            <th>Foto Rekening Air</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $e=>$dt)
                                        <tr>
                                            <td>
                                                <h4><strong>{{ $dt->nama_sebelumnya }}</strong></h4><br>
                                            </td>
                                            <td>
                                                <h4><strong>{{ $dt->nama_pengaju }}</strong></h4><br>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->no_ktp}}</strong></h4>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->alamat}}</strong></h4>
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/'.$dt->gambar_ktp)}}" height="150px"><br>
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/'.$dt->gambar_rekening)}}" height="150px"><br>
                                            </td>
                                            <td>
                                                <a href='{{ url('detail/'.$dt->id)}}' class="btn btn-success btn-edit" id="edit"><i class="fa fa-eye"></i></i></a>
                                            </td>
                                            <td>
                                                <a href='{{ url('pengaduan/'.$dt->id)}}' class="btn btn-warning btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
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

@endsection