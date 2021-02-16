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
                                <form role="form" method='post' action='{{url('pengaduan/'.$data->id)}}' enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label or="exampleInputEmail1">Nama Lengkap :</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$data->nama}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat :</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$data->alamat}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Handphone :</label>
                                        <input name="no_hp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Handphone" value="{{$data->no_hp}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Pelanggan :</label>
                                        <input name="no_pelanggan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Pelanggan" value="{{$data->no_pelanggan}}" rows="10" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jenis :</label>
                                        <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$data->jenis}}" rows="10" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Kerusakan :</label>
                                        <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="{{$data->kerusakan}}" rows="10" disabled></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Isi Pengaduan :</label>
                                        <textarea name="isi_pengaduan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" rows="10" disabled>{!!$data->isi_pengaduan!!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status Penanganan:</label>
                                        <select name="status" class="form-control" id="exampleFormControlSelect1" value="{{old('status')}}" style="width: 20%">
                                            <option value="Belum" {{(old('status') == 'Belum') ? ' selected' : ''}}>Belum</option>
                                            <option value="Selesai" {{(old('status') == 'Selesai') ? ' selected' : ''}}>Selesai</option>
                                        </select>
                                        @if($errors->has('status'))
                                        <span class="help-block">{{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                    <div class="box-footer" style="float: right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <a href="{{url('/pengaduan')}}"><button type="back" class="btn btn-danger">Kembali</button></a>
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