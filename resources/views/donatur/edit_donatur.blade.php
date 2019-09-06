@extends('layouts.app')

@section('title', 'Donatur')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Edit Data Donatur</h4>
                <p class="card-category">Silahkan diperbaharui</p>
            </div>
            <div class="card-body">
                <form method="post" action="/donatur/update">

                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $donatur->id }}">

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama</label>
                            <input type="text" class="form-control form-control-custom" name="nama" value=" {{ $donatur->nama }}">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Contoh: Jl. Mawar-Melati Semuanya Indah</label>
                            <textarea name="alamat" class="form-control form-control-custom" rows="5">{{ $donatur->alamat }}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">No. Telepon</label>
                            <input type="text" class="form-control form-control-custom" name="telpon" value=" {{ $donatur->telpon }}">
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
