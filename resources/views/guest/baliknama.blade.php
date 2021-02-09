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
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nama Pengaju :</label>
                                <input name="name" type="text" placeholder="Isi dengan nama lengkap anda">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. KTP :</label>
                                <input name="address" type="text" placeholder="Nomer KTP">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="phone" type="text" placeholder="Alamat Lengkap">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                {{-- <label class="form-group" for="">Foto KTP :</label> --}}
                                <p>Foto KTP :</p>
                                <input type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                {{-- <label class="form-group" for="">Foto Rekening Air :</label> --}}
                                <p>Foto rekening Air :</p>
                                <input type="file" class="form-control-file">
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
                    <img src="guest/img/balik_nama.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection