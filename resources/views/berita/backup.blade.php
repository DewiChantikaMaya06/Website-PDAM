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
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Berita</th>
                                            <th>Sumber</th>
                                            <th>Pulihkan</th>
                                            <th>Hapus Permanen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $e=>$dt)
                                        <tr>
                                            <td>{{$e+1}}</td>
                                            <td>{{$dt->created_at}}</td>
                                            <td>
                                                <h4><strong>{{ $dt->judul }}</strong></h4> <br>
                                                <img src="{{asset('storage/'.$dt->gambar_berita)}}" height="150px"><br>
                                                <h4><strong>{!! $dt->isi_berita !!}</strong></h4> <br>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->sumber}}</strong></h4>
                                            </td>
                                            <td>
                                                <form method='get' action='{{url('berita/restore/'.$dt->id)}}'>
                                                    @method('restore')
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning" onclick="return confirm('Data akan dipulihkan?') "><i class="lnr lnr-exit-up"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method='get' action='{{url('berita/deletePermanen/'.$dt->id)}}'>
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
