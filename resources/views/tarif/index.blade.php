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
                                <a href="{{ url('tarif/add') }}" type="button" class="btn"><i class="lnr lnr-plus-circle"></i></a>
                            </div>
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
                                                <a href='{{ url('tarif/'.$dt->id) }}' class="btn btn-warning btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td>
                                                <form method='post' action='{{url('tarif/delete/'.$dt->id)}}'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?') "><i class="fa fa-trash-o"></i></button>
                                                </form>
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