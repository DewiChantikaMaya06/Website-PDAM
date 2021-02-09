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
                                <a href="{{ url('berita/add') }}" type="button" class="btn"><i class="lnr lnr-plus-circle"></i></a>
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
                                            <th>Tanggal</th>
                                            <th>Berita</th>
                                            <th>Sumber</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
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
                                                <p>{!!$dt->isi_berita!!}</p>
                                            </td>
                                            <td>{{$dt->sumber}}</td>
                                            <td>
                                                <a href='{{ url('berita/'.$dt->id) }}' class="btn btn-warning btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td>
                                                <form method='post' action='{{url('berita/delete/'.$dt->id)}}'>
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