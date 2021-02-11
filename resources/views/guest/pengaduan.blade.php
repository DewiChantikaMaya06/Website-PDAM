@extends('guest.template.master')
@section('content')
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Pengaduan</h2>
                    <p>Anda dapat melakukan pengaduan apabila terjadi kerusakan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form role="form" method='post' action='{{url('pengaduan/add')}}' enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nama Lengkap :</label>
                                <input name="name" type="text" placeholder="nama lengkap anda" value="{{old('nama')}}">
                                {{-- @if($errors->has('nama'))
                                <span class="help-block">{{$errors->first('nama')}}</span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Alamat Lengkap :</label>
                                <input name="address" type="text" placeholder="Alamat Lengkap anda" value="{{old('alamat')}}">
                                {{-- @if($errors->has('alamat'))
                                <span class="help-block">{{$errors->first('alamat')}}</span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nomer Handphone :</label>
                                <input name="phone" type="text" placeholder="Nomer Handphone" value="{{old('no_hp')}}">
                                {{-- @if($errors->has('no_hp'))
                                <span class="help-block">{{$errors->first('no_hp')}}</span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_pelanggan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">No. Pelanggan :</label>
                                <input name="address" type="text" placeholder="Nomer Pelanggan" value="{{old('no_pelanggan')}}">
                                {{-- @if($errors->has('no_pelanggan'))
                                <span class="help-block">{{$errors->first('no_pelanggan')}}</span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group {{$errors->has('jenis') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Jenis Pengaduan</label>
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Jenis Pengaduan</span>
                                    <ul class="list">
                                        <li data-value="AIR KERUH" {{(old('jenis') == 'AIR KERUH') ? ' selected' : ''}} class="option">AIR KERUH</li>
                                        <li data-value="KEBOCORAN" {{(old('jenis') == 'KEBOCORAN') ? ' selected' : ''}} class="option">KEBOCORAN</li>
                                        <li data-value="METER" {{(old('jenis') == 'METER') ? ' selected' : ''}} class="option">METER</li>
                                        <li data-value="PEMAKAIAN" {{(old('jenis') == 'PEMAKAIAN') ? ' selected' : ''}} class="option">PEMAKAIAN</li>
                                        <li data-value="TDA" {{(old('jenis') == 'TDA') ? ' selected' : ''}} class="option">TIDAK DAPAT AIR</li>
                                        <li data-value="LAIN-LAIN" {{(old('jenis') == 'LAIN-LAIN') ? ' selected' : ''}} class="option">LAIN-LAIN</li>
                                    </ul>
                                </div>
                                @if($errors->has('jenis'))
                                <span class="help-block">{{$errors->first('jenis')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group {{$errors->has('kerusakan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Tanggal Kerusakan</label>
                                <input type="text" placeholder="Date" id="datepicker" value="{{old('kerusakan')}}">
                                {{-- @if($errors->has('kerusakan'))
                                <span class="help-block">{{$errors->first('kerusakan')}}</span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group {{$errors->has('isi_pengaduan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Isi Pengaduan :</label>
                                <textarea name="isi_pengaduan" placeholder="Ketikkan pengaduan anda..."></textarea>
                                {{-- @if($errors->has('isi_pengaduan'))
                                <span class="help-block">{{$errors->first('isi_pengaduan')}}</span>
                                @endif --}}
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
                    <img src="{{asset('guest/img/contact-img.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi_pengaduan');
</script>
@endsection