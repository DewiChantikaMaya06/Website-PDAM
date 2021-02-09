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
                                <form role="form" method='post' action='{{url('berita/add')}}' enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group {{$errors->has('judul') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('judul')}}">
                                        @if($errors->has('judul'))
                                        <span class="help-block">{{$errors->first('judul')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gambar_berita') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Gambar Berita</label>
                                        <input name="gambar_berita" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar Berita" value="{{old('gambar_berita')}}">
                                        @if($errors->has('gambar_berita'))
                                        <span class="help-block">{{$errors->first('gambar_berita')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('isi_berita') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Berita</label>
                                        <textarea name="isi_berita" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="10">{{old('isi_berita')}}</textarea>
                                        @if($errors->has('isi_berita'))
                                        <span class="help-block">{{$errors->first('isi_berita')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('sumber') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Sumber</label>
                                        <input name="sumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sumber" value="{{old('sumber')}}">
                                        @if($errors->has('sumber'))
                                        <span class="help-block">{{$errors->first('sumber')}}</span>
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
    CKEDITOR.replace('isi_berita');
</script>
@endsection