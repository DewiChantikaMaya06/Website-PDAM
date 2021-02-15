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
                                <form role="form" method='post' action='{{url('pendaftaran/'.$data->id)}}' enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label or="exampleInputEmail1">Nama Lengkap :</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$data->nama}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. KTP :</label>
                                        <input name="no_ktp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. KTP" value="{{$data->no_ktp}}" rows="10" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat :</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$data->alamat}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">RT :</label>
                                        <input name="rt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$data->rt}}" rows="4" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">RW :</label>
                                        <input name="rw" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$data->rw}}" rows="4" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Handphone :</label>
                                        <input name="no_hp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Handphone" value="{{$data->no_hp}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gambar KTP :</label>
                                        <br>
                                        <img src="{{asset('storage/'.$data->gambar_ktp)}}" height="250px">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status :</label>
                                        <select name="status" class="form-control" id="exampleFormControlSelect1" value="{{old('status')}}" style="width: 20%">
                                            <option value="Belum verifikasi" {{(old('status') == 'Belum verifikasi') ? ' selected' : ''}}>Belum Verifikasi</option>
                                            <option value="Verifikasi" {{(old('status') == 'Verifikasi') ? ' selected' : ''}}>Verifikasi</option>
                                        </select>
                                        @if($errors->has('status'))
                                        <span class="help-block">{{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                    <div class="box-footer" style="float: right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{url('/pendaftaran')}}"><button type="back" class="btn btn-danger">Kembali</button></a>
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
    CKEDITOR.replace('isi_pengaduan');
</script>
@endsection