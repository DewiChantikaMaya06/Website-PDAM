@extends('guest.template.master')
@section('content')
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Balik Nama</h2>
                </div>
            </div>
        </div>
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Petugas akan menghubungi dalam 1x24 jam
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form role="form" class="form" method='post' action='{{url('baliknama/add/')}}' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('nama_sebelumnya') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nama Sebelumnya :</label>
                                <input name="nama_sebelumnya" type="text" placeholder="Isi dengan nama lengkap anda" value="{{old('nama_sebelumnya')}}">
                                @if($errors->has('nama_sebelumnya'))
                                    <span class="help-block text-danger">{{$errors->first('nama_sebelumnya')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('nama_pengaju') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nama Pengaju :</label>
                                <input name="nama_pengaju" type="text" placeholder="Isi dengan nama lengkap anda" value="{{old('nama_pengaju')}}">
                                @if($errors->has('nama_pengaju'))
                                    <span class="help-block text-danger">{{$errors->first('nama_pengaju')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_ktp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">No. KTP :</label>
                                <input name="no_ktp" type="text" placeholder="Nomer KTP" value="{{old('no_ktp')}}">
                                @if($errors->has('no_ktp'))
                                    <span class="help-block text-danger">{{$errors->first('no_ktp')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="alamat" type="text" placeholder="Alamat Lengkap" value="{{old('alamat')}}">
                                @if($errors->has('alamat'))
                                    <span class="help-block text-danger">{{$errors->first('alamat')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group {{$errors->has('gambar_ktp') ? 'has-error' : ''}}">
                                {{-- <label class="form-group" for="">Foto KTP :</label> --}}
                                <p>Foto KTP :</p>
                                <input name="gambar_ktp" type="file" class="form-control-file" value="{{old('gambar_ktp')}}">
                                @if($errors->has('gambar_ktp'))
                                    <span class="help-block">{{$errors->first('gambar_ktp')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group {{$errors->has('gambar_rekening') ? 'has-error' : ''}}">
                                {{-- <label class="form-group" for="">Foto Rekening Air :</label> --}}
                                <p>Foto rekening Air :</p>
                                <input name="gambar_rekening" type="file" class="form-control-file" value="{{old('gambar_rekening')}}">
                                @if($errors->has('gambar_rekening'))
                                    <span class="help-block">{{$errors->first('gambar_rekening')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{('guest/img/balik_nama.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection