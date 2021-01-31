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
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nama Lengkap :</label>
                                <input name="name" type="text" placeholder="Isi dengan nama lengkap anda">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Alamat Lengkap :</label>
                                <input name="address" type="text" placeholder="Alamat Lengkap anda">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nomer Handphone :</label>
                                <input name="phone" type="text" placeholder="Nomer Telphone">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. Pelanggan :</label>
                                <input name="phone" type="text" placeholder="Masukkan nomer pelanggan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Jenis Pengaduan</label>
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Jenis Pengaduan</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">AAAAA</li>
                                        <li data-value="2" class="option">AAA</li>
                                        <li data-value="3" class="option">AAA</li>
                                        <li data-value="4" class="option">AA</li>
                                        <li data-value="5" class="option">AAA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Tanggal Kerusakan</label>
                                <input type="text" placeholder="Date" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Isi Pengaduan :</label>
                                <textarea name="message" placeholder="Ketikkan pengaduan anda..."></textarea>
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
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( We will be confirm by an Text Message )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="guest/img/contact-img.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection