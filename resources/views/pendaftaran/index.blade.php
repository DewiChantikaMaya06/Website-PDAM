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
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.Handphone</th>
                                            <th>Gambar KTP</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $e=>$dt)
                                        <tr>
                                            <td>{{$e+1}}</td>
                                            <td>
                                                <h4><strong>{{ $dt->nama }}</strong></h4> <br>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->alamat}}</strong></h4>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->no_hp}}</strong></h4>
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/'.$dt->gambar_ktp)}}" height="150px">
                                            </td>
                                            <td>
                                                @if($dt->status != 'Verifikasi')
                                                <button type="button" class="btn btn-danger">{{$dt->status}}</button>
                                                @elseif($dt->status != 'Belum verifikasi')
                                                <button type="button" class="btn btn-success">{{$dt->status}}</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a href='{{ url('detail/pendaftaran/'.$dt->id)}}' class="btn btn-primary btn-edit" id="edit"><i class="fa fa-eye"></i></i></a>
                                                <br>
                                                <br>
                                                <a href='{{ url('pendaftaran/'.$dt->id)}}' class="btn btn-warning btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <br>
                                                <br>
                                                <form method='post' action='{{url('pendaftaran/delete/'.$dt->id)}}'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?') "><i class="fa fa-trash-o"></i></button>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4>{{ $title2 }}</h4>
                        </div>
                        <div class="panel-body">
                            <div class='table-responsive'>
                                <table class='table myTable'>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.Handphone</th>
                                            <th>Gambar KTP</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data2 as $e=>$dt)
                                        <tr>
                                            <td>{{$e+1}}</td>
                                            <td>
                                                <h4><strong>{{ $dt->nama }}</strong></h4> <br>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->alamat}}</strong></h4>
                                            </td>
                                            <td>
                                                <h4><strong>{{$dt->no_hp}}</strong></h4>
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/'.$dt->gambar_ktp)}}" height="150px">
                                            </td>
                                            <td>
                                                @if($dt->status != 'Verifikasi')
                                                <button type="button" class="btn btn-danger">{{$dt->status}}</button>
                                                @elseif($dt->status != 'Belum verifikasi')
                                                <button type="button" class="btn btn-success">{{$dt->status}}</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a href='{{ url('detail/pendaftaran/'.$dt->id)}}' class="btn btn-primary btn-edit" id="edit"><i class="fa fa-eye"></i></i></a>
                                                <br>
                                                <br>
                                                <a href='{{ url('pendaftaran/'.$dt->id)}}' class="btn btn-warning btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <br>
                                                <br>
                                                <form method='post' action='{{url('pendaftaran/delete/'.$dt->id)}}'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?') "><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pull-left">
                                    Showing
                                    {{ $data2->firstItem() }}
                                    to
                                    {{ $data2->lastItem() }}
                                    of
                                    {{ $data2->total() }}
                                    entries
                                </div>
                                <div class="pull-right">
                                    {{ $data2->links() }}
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