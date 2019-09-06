@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Edit Data Transaksi</h4>
                <p class="card-category">Silahkan diperbaharui</p>
            </div>
            <div class="card-body">
                <form method="post" action="/trx_masuk/update">

                    {{ csrf_field() }}

                    @foreach($trx_masuk as $data)
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating" style="font-size:0.7rem;">Donatur</label><br>
                                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="donatur_id">
                                        <option selected value="{{ $data->donatur_id }}" class="selected-data">{{ $data->nama_donatur }}</option>
                                        @foreach($donatur as $don)
                                            <option value="{{ $don->id }}">{{ $don->nama }}</option>                                    
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">No. Transaksi</label>
                                <input type="text" class="form-control form-control-custom" name="no_transaksi" value=" {{ $data->no_transaksi }}" disabled>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Jumlah</label>
                                <input type="text" class="form-control form-control-custom" name="jumlah" value=" {{ $data->jumlah }}">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tgl. Transaksi</label>                
                                    <input type="text" class="form-control datetimepicker-show" name="tgl_masuk" value="{{ $data->tgl_transaksi }}">                                                
                                    <input type="text" class="form-control form-control-custom datetimepicker datetimepicker-hide" name="tgl_transaksi" value="{{ $data->tgl_masuk }}">
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating" style="font-size:0.7rem;">Donasi</label><br>
                                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="donasi_id">
                                        <option selected value="{{ $data->reff_donasi_id }}" class="selected-data">{{ $data->nama_donasi }}</option>
                                        @foreach($reff_donasi as $reff)
                                            <option value="{{ $reff->id }}">{{ $reff->nama }}</option>                                    
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>              

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating" style="font-size:0.7rem;">Koordinator</label><br>
                                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="koordinator_id">
                                        <option selected value="{{ $data->koordinator_id }}" class="selected-data">{{ $data->nama_koor }}</option>
                                        @foreach($koordinator as $koor)
                                            <option value="{{ $koor->id }}">{{ $koor->nama }}</option>                                    
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
