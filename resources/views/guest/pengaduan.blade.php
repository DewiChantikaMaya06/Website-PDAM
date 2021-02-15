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
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data berhasil di input...
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" role="form" method='post' action='{{url('pengaduan/add/')}}'>
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nama Lengkap :</label><br>
                                <input name="nama" type="text" placeholder="Nama lengkap anda" value="{{old('nama')}}" rows="10">
                                @if($errors->has('nama'))
                                <span class="help-block text-danger">{{$errors->first('nama')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Alamat Lengkap :</label><br>
                                <input name="alamat" type="text" placeholder="Alamat Lengkap anda" value="{{old('alamat')}}">
                                @if($errors->has('alamat'))
                                <span class="help-block text-danger">{{$errors->first('alamat')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Nomer Handphone :</label><br>
                                <input name="no_hp" type="number" placeholder="Nomer Handphone" value="{{old('no_hp')}}">
                                @if($errors->has('no_hp'))
                                <span class="help-block text-danger">{{$errors->first('no_hp')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group {{$errors->has('no_pelanggan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">No. Pelanggan :</label><br>
                                <input name="no_pelanggan" type="number" placeholder="Nomer Pelanggan" value="{{old('no_pelanggan')}}">
                                @if($errors->has('no_pelanggan'))
                                <span class="help-block text-danger">{{$errors->first('no_pelanggan')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group {{$errors->has('jenis') ? 'has-error' : ''}}">
                                <label for="exampleFormControlSelect1">Pilih Jenis</label>
                                <select name="jenis" class="form-control" id="exampleFormControlSelect1" value="{{old('jenis')}}">
                                    <option value="Air Keruh" {{(old('jenis') == 'Air Keruh') ? ' selected' : ''}}>Air Keruh</option>
                                    <option value="Kebocoran" {{(old('jenis') == 'Kebocoran') ? ' selected' : ''}}>Kebocoran</option>
                                    <option value="Meter" {{(old('jenis') == 'Meter') ? ' selected' : ''}}>Meter</option>
                                    <option value="Pemakaian" {{(old('jenis') == 'Pemakaian') ? ' selected' : ''}}>Pemakaian</option>
                                    <option value="Tidak Dapat Air" {{(old('jenis') == 'Tidak Dapat Air') ? ' selected' : ''}}>TDA(Tidak dapat air)</option>
                                    <option value="Lain-ain" {{(old('jenis') == 'Lain-lain') ? ' selected' : ''}}>lain - lain</option>
                                </select>
                                @if($errors->has('jenis'))
                                <span class="help-block text-danger">{{$errors->first('jenis')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group {{$errors->has('kerusakan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Tanggal Kerusakan</label>
                                <input type="date" name="kerusakan" placeholder="Date" id="" value="{{old('kerusakan')}}">
                                @if($errors->has('kerusakan'))
                                <span class="help-block text-danger">{{$errors->first('kerusakan')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group {{$errors->has('isi_pengaduan') ? 'has-error' : ''}}">
                                <label class="form-group" for="">Isi Pengaduan :</label>
                                <textarea name="isi_pengaduan" placeholder="Ketikkan pengaduan anda...">{{old('isi_pengaduan')}}</textarea>
                                @if($errors->has('isi_pengaduan'))
                                <span class="help-block text-danger">{{$errors->first('isi_pengaduan')}}</span>
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