@extends('layouts.app')

@section('title', 'Koordinator')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Edit Data Koordinator</h4>
                <p class="card-category">Silahkan diperbaharui</p>
            </div>
            <div class="card-body">
                <form method="post" action="/koordinator/update">

                    {{ csrf_field() }}

                    @foreach($koordinator as $data)
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama</label>
                                <input type="text" class="form-control form-control-custom" name="nama" value="{{ $data->nama }}">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Alamat</label>
                            <div class="form-group">
                                <label class="bmd-label-floating"> Contoh: Jl. Mawar-Melati Semuanya Indah</label>
                                <textarea name="alamat" class="form-control form-control-custom" rows="5">{{ $data->alamat }}</textarea>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">No. Telepon</label>
                                <input type="text" class="form-control form-control-custom" name="telpon" value="{{ $data->telpon }}">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tgl. Masuk</label>                
                                    <input type="text" class="form-control datetimepicker-show" name="tgl_masuk" value="{{ $data->tgl_masuk }}">                                                
                                    <input type="text" class="form-control form-control-custom datetimepicker datetimepicker-hide" name="tgl_masuk" value="{{ $data->tgl_masuk }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">No. Anggota</label>
                                <input type="text" class="form-control form-control-custom" name="no_anggota" value="{{ $data->no_anggota }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="selectpicker" data-size="7" data-style="select-with-transition"  name="kantor_id">
                                        <option selected value="{{ $data->kantor_id }}" class="selected-data">{{ $data->nama_kantor }}</option>
                                        @foreach($kantor as $kan)
                                            <option value="{{ $kan->id }}">{{ $kan->nama }}</option>                                    
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
                    <a href="/transaksi" class="btn btn-warning pull-right">Kembali</a>                  

                    <div class="clearfix"></div>

                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
