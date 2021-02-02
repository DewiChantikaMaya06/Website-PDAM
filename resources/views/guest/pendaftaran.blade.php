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
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nama Pelanggan :</label>
                                <input name="name" type="text" placeholder="Isi dengan nama lengkap anda">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. KTP :</label>
                                <input name="address" type="text" placeholder="Alamat Lengkap anda">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="phone" type="text" placeholder="Nomer Telphone">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <label for="form-group" for="">RT :</label>
                                        <input type="text" class="form-control" placeholder="RT">
                                    </div>
                                    <div class="col">
                                        <label for="form-group" for="">RW :</label>
                                        <input type="text" class="form-control" placeholder="RW">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. Handphone :</label>
                                <input name="phone" type="text" placeholder="Masukkan nomer handphone">
                            </div>
                        </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label class="form-group" for="">Foto KTP :</label>
                            <p>Max 5 mb.</p>
                            <input type="file" class="form-control-file">
                            <p>Petugas PDAM akan menghubungi nomer anda dalam 1x24 jam</p>
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
                    <img src="guest/img/contact-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection