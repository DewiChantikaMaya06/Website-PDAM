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
                                <form role="form" method='post' action='{{url('info/add')}}' enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group {{$errors->has('unit') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Unit</label>
                                        <input name="unit" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit" value="{{old('unit')}}">
                                        @if($errors->has('unit'))
                                        <span class="help-block">{{$errors->first('unit')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pegawai') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pegawai</label>
                                        <input name="pegawai" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pegawai" value="{{old('pegawai')}}">
                                        @if($errors->has('pegawai'))
                                        <span class="help-block">{{$errors->first('pegawai')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pengguna') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pengguna</label>
                                        <input name="pengguna" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pengguna" value="{{old('pengguna')}}">
                                        @if($errors->has('pengguna'))
                                        <span class="help-block">{{$errors->first('pengguna')}}</span>
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