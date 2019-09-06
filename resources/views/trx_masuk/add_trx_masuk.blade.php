@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Tambah Data Transaksi</h4>
                <p class="card-category">Silahkan ditambahkan</p>
            </div>
            <div class="card-body">
                <form method="post" action="/trx_masuk/save">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating" style="font-size:0.7rem;">Donatur</label><br>
                                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="donatur_id">
                                    <option selected disabled>- Pilih Donatur -</option>
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
                            <input type="text" class="form-control form-control-custom" name="no_transaksi" value=" Trx-{{ $no_transaksi+1 }}" readonly>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Jumlah</label>
                            <input type="text" class="form-control form-control-custom" name="jumlah">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tgl. Transaksi</label>                                                                
                                <input type="text" class="form-control form-control-custom datetimepicker" name="tgl_transaksi">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating" style="font-size:0.7rem;">Donasi</label><br>
                                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="donasi_id">
                                    <option selected disabled>- Pilih Donasi -</option>
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
                                    <option selected disabled>- Pilih Koordinator -</option>
                                    @foreach($koordinator as $koor)
                                        <option value="{{ $koor->id }}">{{ $koor->nama }}</option>                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

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
