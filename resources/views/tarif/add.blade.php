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
                                <form role="form" method='post' action='{{url('tarif/add')}}'>
                                    @csrf
                                    <div class="form-group {{$errors->has('klasifikasi') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Klasifikasi</label>
                                        <input name="klasifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Klasifikasi" value="{{old('klasifikasi')}}">
                                        @if($errors->has('klasifikasi'))
                                        <span class="help-block">{{$errors->first('klasifikasi')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kelompok') ? 'has-error' : ''}}">
                                        <label for="exampleFormControlSelect1">Pilih Kelompok</label>
                                        <select name="kelompok" class="form-control" id="exampleFormControlSelect1" value="{{old('kelompok')}}">
                                            <option value="A1" {{(old('kelompok') == 'A1') ? ' selected' : ''}}>A1 (Sosial Umum)</option>
                                            <option value="A2" {{(old('kelompok') == 'A2') ? ' selected' : ''}}>A2 (Sosial Umum)</option>
                                            <option value="A3" {{(old('kelompok') == 'A3') ? ' selected' : ''}}>A3 (Sosial Rumah Tangga)</option>
                                            <option value="B1" {{(old('kelompok') == 'B1') ? ' selected' : ''}}>B1 (Rumah Tangga)</option>
                                            <option value="B2" {{(old('kelompok') == 'B2') ? ' selected' : ''}}>B2 (Rumah Tangga)</option>
                                            <option value="B3" {{(old('kelompok') == 'B3') ? ' selected' : ''}}>B3 (Instansi Pemerintah)</option>
                                            <option value="C1" {{(old('kelompok') == 'C1') ? ' selected' : ''}}>C1 (Niaga Kecil)</option>
                                            <option value="C2" {{(old('kelompok') == 'C2') ? ' selected' : ''}}>C2 (Niaga Besar)</option>
                                            <option value="D1" {{(old('kelompok') == 'D1') ? ' selected' : ''}}>D1 (Industri Kecil)</option>
                                            <option value="D2" {{(old('kelompok') == 'D2') ? ' selected' : ''}}>D2 (Industri Besar)</option>
                                        </select>
                                        @if($errors->has('kelompok'))
                                        <span class="help-block">{{$errors->first('kelompok')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemakaian1') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemakaian (0-10 m³)</label>
                                        <input name="pemakaian1" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0-10 m³" value="{{old('pemakaian1')}}">
                                        @if($errors->has('pemakaian1'))
                                        <span class="help-block">{{$errors->first('pemakaian1')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemakaian2') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemakaian (>10 m³)</label>
                                        <input name="pemakaian2" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=">10 m³" value="{{old('pemakaian2')}}">
                                        @if($errors->has('pemakaian2'))
                                        <span class="help-block">{{$errors->first('pemakaian2')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemeliharaan') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemeliharaan</label>
                                        <input name="pemeliharaan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemeliharaan" value="{{old('pemeliharaan')}}">
                                        @if($errors->has('pemeliharaan'))
                                        <span class="help-block">{{$errors->first('pemeliharaan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('admin') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Admin</label>
                                        <input name="admin" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin" value="{{old('admin')}}">
                                        @if($errors->has('admin'))
                                        <span class="help-block">{{$errors->first('admin')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('denda') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Denda</label>
                                        <input name="denda" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Denda" value="{{old('denda')}}">
                                        @if($errors->has('denda'))
                                        <span class="help-block">{{$errors->first('denda')}}</span>
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

@endsection