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
                                <form role="form" method='post' action='{{url('tarif/'.$data->id)}}'>
                                    @csrf
                                    {{ method_field('put') }}
                                    <div class="form-group {{$errors->has('klasifikasi') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Klasifikasi</label>
                                        <input name="klasifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Klasifikasi" value="{{$data->klasifikasi}}">
                                        @if($errors->has('klasifikasi'))
                                        <span class="help-block">{{$errors->first('klasifikasi')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('kelompok') ? 'has-error' : ''}}">
                                        <label for="exampleFormControlSelect1">Pilih Kelompok</label>
                                        <select name="kelompok" class="form-control" id="exampleFormControlSelect1">
                                            <option value="A1" @if($data->kelompok == 'A1') selected @endif>A1 (Sosial Umum)</option>
                                            <option value="A2" @if($data->kelompok == 'A2') selected @endif>A2 (Sosial Umum)</option>
                                            <option value="A3" @if($data->kelompok == 'A3') selected @endif>A3 (Sosial Rumah Tangga)</option>
                                            <option value="B1" @if($data->kelompok == 'B1') selected @endif>B1 (Rumah Tangga)</option>
                                            <option value="B2" @if($data->kelompok == 'B2') selected @endif>B2 (Rumah Tangga)</option>
                                            <option value="B3" @if($data->kelompok == 'B3') selected @endif>B3 (Instansi Pemerintah)</option>
                                            <option value="C1" @if($data->kelompok == 'C1') selected @endif>C1 (Niaga Kecil)</option>
                                            <option value="C2" @if($data->kelompok == 'C2') selected @endif>C2 (Niaga Besar)</option>
                                            <option value="D1" @if($data->kelompok == 'D1') selected @endif>D1 (Industri Kecil)</option>
                                            <option value="D2" @if($data->kelompok == 'D2') selected @endif>D2 (Industri Besar)</option>
                                            <option value="E1" @if($data->kelompok == 'E1') selected @endif>E1 (Non Komersial)</option>
                                            <option value="E2" @if($data->kelompok == 'E2') selected @endif>E2 (Komersail)</option>
                                        </select>
                                        @if($errors->has('kelompok'))
                                        <span class="help-block">{{$errors->first('kelompok')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemakaian1') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemakaian (0-10 m³)</label>
                                        <input name="pemakaian1" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0-10 m³" value="{{$data->pemakaian1}}">
                                        @if($errors->has('pemakaian1'))
                                        <span class=" help-block">{{$errors->first('pemakaian1')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemakaian2') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemakaian (>10 m³)</label>
                                        <input name="pemakaian2" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=">10 m³" value="{{$data->pemakaian2}}">
                                        @if($errors->has('pemakaian2'))
                                        <span class=" help-block">{{$errors->first('pemakaian2')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('pemeliharaan') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Pemeliharaan</label>
                                        <input name="pemeliharaan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pemeliharaan" value="{{$data->pemeliharaan}}">
                                        @if($errors->has('pemeliharaan'))
                                        <span class=" help-block">{{$errors->first('pemeliharaan')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('admin') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Admin</label>
                                        <input name="admin" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin" value="{{$data->admin}}">
                                        @if($errors->has('admin'))
                                        <span class=" help-block">{{$errors->first('admin')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('denda') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Denda</label>
                                        <input name="denda" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Denda" value="{{$data->denda}}">
                                        @if($errors->has('denda'))
                                        <span class=" help-block">{{$errors->first('denda')}}</span>
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