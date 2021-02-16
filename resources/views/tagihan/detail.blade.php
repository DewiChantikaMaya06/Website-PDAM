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
                                <form role="form" method='post' action='{{url('tagihan/'.$detail->no_pelanggan)}}' enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label or="exampleInputEmail1" >Nama Lengkap :</label>
                                        <h4>{{$detail->nama}}</h4>
                                        {{-- <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="" disabled> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" >Alamat :</label>
                                        <h4>{{$detail->alamat}}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Handphone :</label>
                                        <h4>{{$detail->no_hp}}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Pelanggan :</label>
                                        <h4>{{$detail->no_pelanggan}}</h4>
                                        {{-- <input name="no_pelanggan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Pelanggan" value="{{$detail->no_pelanggan}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jenis :</label>
                                        <h4>{{$detail->jenis}}</h4>
                                        {{-- <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$detail->jenis}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Kerusakan :</label>
                                        <h4>{{$detail->kerusakan}}</h4>
                                        {{-- <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="{{$detail->kerusakan}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Isi Pengaduan :</label>
                                        <textarea name="isi_pengaduan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" rows="10" disabled>{!!$detail->isi_pengaduan!!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status :</label>
                                        <h4>{{$detail->status}}</h4>
                                        {{-- <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$detail->status}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="box-footer">
                                        <button type="back" class="btn btn-primary" style="float: right"><a href="{{url('/pengaduan')}}" style="color: white">Kembali</a></button>
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