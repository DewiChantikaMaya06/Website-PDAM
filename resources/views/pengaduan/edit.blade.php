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
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$data->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat :</label>
                                        <input name="judul" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar Kegiatan" value="{{$data->alamat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Handphone :</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$data->no_hp}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Pelanggan :</label>
                                        <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="" rows="10">{{$data->no_pelanggan}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jenis :</label>
                                        <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="" rows="10">{{$data->jenis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Kerusakan :</label>
                                        <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="" rows="10">{{$data->kerusakan}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Isi Pengaduan :</label>
                                        <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi" value="" rows="10">{!!$data->isi_pengaduan!!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status :</label>
                                        <select name="status" class="form-control" id="exampleFormControlSelect1" value="{{old('status')}}">
                                            <option value="selesai" {{(old('status') == 'selesai') ? ' selected' : ''}}>Selesai</option>
                                            <option value="belum" {{(old('status') == 'belum') ? ' selected' : ''}}>Belum Penanganan</option>   
                                        </select>         
                                        @if($errors->has('status'))
                                        <span class="help-block">{{$errors->first('status')}}</span>
                                        @endif       
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    CKEDITOR.replace('deskripsi');
</script>
@endsection