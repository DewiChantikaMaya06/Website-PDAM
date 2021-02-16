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
                        <div class="box box-warning">
                            <div class="panel-body">
                                <form role="form" method='post' action='{{url('tagihan/add')}}' enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group {{$errors->has('no_pelanggan') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">No. Pelanggan:</label>
                                        <input name="no_pelanggan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$data->no_pelanggan}}">
                                    </div>
                                    <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('nama')}}">
                                        @if($errors->has('nama'))
                                        <span class="help-block">{{$errors->first('nama')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Alamat :</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('alamat')}}">
                                        @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('no_sambungan') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">No. Sambungan :</label>
                                        <input name="no_sambungan" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar Kegiatan" value="{{old('no_sambungan')}}">
                                        @if($errors->has('no_sambungan'))
                                        <span class="help-block">{{$errors->first('gambar_kegiatan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_rekening') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Jumlah Rekening :</label>
                                        <input name="jumlah_rekening" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar Kegiatan" value="{{old('jumlah_rekening')}}">
                                        @if($errors->has('jumlah_rekening'))
                                        <span class="help-block">{{$errors->first('deskripsi')}}</span>
                                        @endif
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endsection