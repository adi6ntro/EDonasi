@extends('layouts.app')

@section('title', 'Referensi Donasi')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Edit Data Referensi Donasi</h4>
                <p class="card-category">Silahkan ditambahkan</p>
            </div>
            <div class="card-body">
                <form method="post" action="/reff_donasi/save">

                    {{ csrf_field() }}

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nama Donasi</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Contoh: Donasi untuk bencana alama, kemiskinan, dll ..</label>
                            <input type="text" class="form-control form-control-custom" name="nama">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control form-control-custom" name="keterangan" rows="5"></textarea>
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
