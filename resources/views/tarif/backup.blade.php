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
                            <i class="fa fa-check-circle"></i> Data berhasil di pulihkan...
                        </div>
                        @elseif(session('suksesDelete'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <i class="fa fa-trash-o"></i> Data di Hapus selamanya.
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
                                            <th>Pulihkan</th>
                                            <th>Hapus Permanen</th>
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
                                                <form method='get' action='{{url('tarif/restore/'.$dt->id)}}'>
                                                    @method('restore')
                                                    @csrf
                                                    <button type="submit" class="btn btn-success" onclick="return confirm('Data akan dipulihkan?') "><i class="fa fa-pencil-square-o"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method='get' action='{{url('tarif/deletePermanen/'.$dt->id)}}'>
                                                    @method('forceDelete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus permanen?') "><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pull-left">
                                    Showing
                                    {{ $data->firstItem() }}
                                    to
                                    {{ $data->lastItem() }}
                                    of
                                    {{ $data->total() }}
                                    entries
                                </div>
                                <div class="pull-right">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection