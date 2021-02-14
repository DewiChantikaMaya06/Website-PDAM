@extends('guest.template.master')
@section('content')
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Pendaftaran Sambung Super Kilat</h2>
                </div>
            </div>
        </div>
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data berhasil di input...
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form role="form" class="form" method='post' action='{{url('pendaftaran/tambah/')}}'>
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}} ">
                                <label class="form-group" for="">Nama Pelanggan :</label>
                                <input name="nama" type="text" placeholder="Isi dengan nama lengkap anda" value="{{old('nama')}}">
                                @if($errors->has('nama'))
                                    <span class="help-block text-danger">{{$errors->first('nama')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_ktp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">No. KTP :</label>
                                <input name="no_ktp" type="number" placeholder="No. KTP anda" value="{{old('no_ktp')}}">
                                @if($errors->has('no_ktp'))
                                    <span class="help-block text-danger">{{$errors->first('no_ktp')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="alamat" type="text" placeholder="Alamat" value="{{old('alamat')}}">
                                @if($errors->has('alamat'))
                                    <span class="help-block text-danger">{{$errors->first('alamat')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <form>
                                <div class="row">
                                    <div class="col {{$errors->has('rt') ? 'has-error' : ''}}">
                                        <label for="form-group" for="">RT :</label>
                                        <input name="rt" type="number" class="form-control" placeholder="RT" value="{{old('rt')}}">
                                        @if($errors->has('rt'))
                                            <span class="help-block text-danger">{{$errors->first('rt')}}</span>
                                        @endif
                                    </div>
                                    <div class="col {{$errors->has('rw') ? 'has-error' : ''}}">
                                        <label for="form-group" for="">RW :</label>
                                        <input name="rw" type="number" class="form-control" placeholder="RW" value="{{old('rw')}}">
                                        @if($errors->has('rw'))
                                            <span class="help-block text-danger">{{$errors->first('rw')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">No. Handphone :</label>
                                <input name="phone" type="number" placeholder="Masukkan nomer handphone" value="{{old('no_hp')}}">
                                @if($errors->has('no_hp'))
                                    <span class="help-block text-danger">{{$errors->first('no_hp')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group {{$errors->has('gambar_ktp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Foto KTP : </label>
                                <input type="file" class="form-control-file" value="{{old('gambar_ktp')}}">
                                <p><font style="color: red">Petugas PDAM akan menghubungi nomer anda dalam 1x24 jam</font></p>
                                @if($errors->has('gambar_ktp'))
                                    <span class="help-block text-danger">{{$errors->first('gambar_ktp')}}</span>
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
                    <img src="{{asset('guest/img/register.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection