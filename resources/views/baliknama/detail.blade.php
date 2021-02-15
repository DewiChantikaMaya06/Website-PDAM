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
                                <form role="form" method='post' action='{{url('baliknama/'.$detail->id)}}' enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}
                                    <div class="form-group" style="float: right; margin-right:10%">
                                        <label for="exampleInputEmail1">Gambar KTP :</label>
                                        <h4><img src="{{asset('storage/'.$detail->gambar_ktp)}}" height="220px"></h4>
                                    </div>
                                    <div class="form-group" style="float: margin-right:10%">
                                        <label for="exampleInputEmail1" >Gambar Rekening :</label>
                                        <h4><img src="{{asset('storage/'.$detail->gambar_rekening)}}" height="220px"></h4>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label or="exampleInputEmail1" >Nama Sebelumnya :</label>
                                        <h4>{{$detail->nama_sebelumnya}}</h4>
                                        {{-- <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="" disabled> --}}
                                    </div>
                                    <div class="form-group" style="float: right; margin-right: 47%">
                                        <label or="exampleInputEmail1" >Nama Pengaju :</label>
                                        <h4>{{$detail->nama_pengaju}}</h4>
                                        {{-- <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="" disabled> --}}
                                    </div>
                                    <div class="form-group" style="float: right; margin-right:50%">
                                        <label for="exampleInputEmail1" >No. KTP:</label>
                                        <h4>{{$detail->no_ktp}}</h4>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Alamat :</label>
                                        <h4>{{$detail->alamat}}</h4>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">No. Handphone :</label>
                                        <h4>{{$detail->no_hp}}</h4>
                                        {{-- <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="{{$detail->kerusakan}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="form-group"  >
                                        <label for="exampleInputEmail1">Status :</label>
                                        @if($detail->status != 'Verifikasi')
                                        <button type="button" class="btn btn-danger">{{$detail->status}}</button>   
                                        @elseif($detail->status != 'Belum verifikasi')
                                        <button type="button" class="btn btn-success">{{$detail->status}}</button>
                                        @endif

                                        {{-- <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$detail->status}}" rows="10" disabled></input> --}}
                                    </div>
                                    <div class="box-footer">
                                        <button type="back" class="btn btn-primary" style="float: right"><a href="{{url('/baliknama')}}" style="color: white">Kembali</a></button>
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
@endsection