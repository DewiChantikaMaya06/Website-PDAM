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
                                <form role="form" method='post' action='{{url('kegiatan/add')}}' enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group {{$errors->has('judul') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('judul')}}">
                                        @if($errors->has('judul'))
                                        <span class="help-block">{{$errors->first('judul')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gambar_kegiatan') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Gambar Kegiatan</label>
                                        <input name="gambar_kegiatan" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar Kegiatan" value="{{old('gambar_kegiatan')}}">
                                        @if($errors->has('gambar_kegiatan'))
                                        <span class="help-block">{{$errors->first('gambar_kegiatan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('deskripsi') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Deskripsi</label>
                                        <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="10">{{old('deskripsi')}}</textarea>
                                        @if($errors->has('deskripsi'))
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