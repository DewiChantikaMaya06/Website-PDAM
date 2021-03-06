@extends('guest.template.master')
@section('content')
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Cek Tagihan</h2>
                    <p>Anda dapat melihat cek tagihan pada halaman ini</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" method="post" action="{{'/cek_tagihan/'}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Identitas Rekening :</label>
                                <input name="no_pelanggan" type="number" placeholder="No. Pelanggan" @if ($pelanggan !=null) value="{{$pelanggan->no_pelanggan}}" @else value="" @endif>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Cek tagihan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                @if ($pelanggan != null)
                <form class="form" action="">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-check-circle"></i> Data berhasil ditemukan !
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nama Lengkap :</label>
                                <input name="name" type="text" value="{{$pelanggan->nama}}" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="name" type="text" value="{{$pelanggan->alamat}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. Sambungan :</label>
                                <input name="name" type="text" value="{{$pelanggan->no_sambungan}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. Pelanggan :</label>
                                <input name="name" type="text" value="{{$pelanggan->no_pelanggan}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Jumlah Rekening :</label>
                                <input name="name" type="text" value="{{$pelanggan->jumlah_rekening}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Tagihan Air :</label>
                                <input name="name" type="text" value="{{$pelanggan->tagihan_air}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Denda :</label>
                                <input name="name" type="text" value="{{$pelanggan->denda}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Segel :</label>
                                <input name="name" type="text" value="{{$pelanggan->segel}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Total Tagihan :</label>
                                <input name="name" type="text" value="{{$pelanggan->total_tagihan}}" disabled>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
            @elseif($pelanggan == null && $pencarian)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-check-circle"></i> Data tidak ditemukan, inputkan kembali !
            </div>
            @endif
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{asset('storage/searching.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection