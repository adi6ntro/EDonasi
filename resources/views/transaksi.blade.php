@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Transaksi</h4>
                        <p class="card-category"> Transaksi yang masuk dari para donatur</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <form action="/transaksi/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="No. Transaksi .." value="{{ old('cari') }}" style="color:white;" autocomplete="off">
                    </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-sm" href="/trx_masuk/add" style="background-color:#2196f3;margin: 1rem 0 0 2.5rem;">
                    <i class="material-icons">queue</i>
                    Tambah Data
                </a>            
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-info" align="center">
                        <th>No</th>
                        <th>Nama&nbsp;Donatur</th>
                        <th>Alamat</th>
                        <th>No.&nbsp;Telpon</th>
                        <th>No.&nbsp;Transaksi</th>
                        <th>Jumlah</th>
                        <th>Tgl.&nbsp;Transaksi</th>
                        <th>Donasi</th>
                        <th>Keterangan</th>
                        <th>Koordinator</th>
                        <!-- <th>Alamat</th>
                        <th>No. Telpon</th>
                        <th>Tgl. Masuk</th> -->
                        <!-- <th>No. Anggota</th> -->
                        <th>Kantor</th>
                        <!-- <th>Alamat</th> -->
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    @foreach($transaksi as $data)   
                    <tr>
                        <td>{{ ( $transaksi->currentPage() - 1 ) * $transaksi->perPage() + $nomer++ }}.</td>
                        <td>{{ $data->nama_donatur }}</td>
                        <td>{{ $data->alamat_donatur }}</td>
                        <td>{{ $data->telpon_donatur }}</td>
                        <td>{{ $data->no_transaksi }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->tgl_transaksi }}</td>
                        <td>{{ $data->nama_donasi }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>{{ $data->nama_koor }}</td>
                        <!-- <td>{{ $data->alamat_koor }}</td>
                        <td>{{ $data->telpon_koor }}</td>
                        <td>{{ $data->tgl_masuk }}</td>
                        <td>{{ $data->no_anggota }}</td> -->
                        <td>{{ $data->nama_kantor }}</td>
                        <!-- <td>{{ $data->alamat_kantor }}</td> -->
                        <td style="white-space:nowrap;">
                            <a class="btn btn-warning btn-sm" href="/trx_masuk/edit/{{ $data->id }}" data-toggle="tooltip" title="Edit">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/trx_masuk/delete/{{ $data->id }}" data-toggle="tooltip" title="Hapus">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- <br/>
				Halaman : {{ $transaksi->currentPage() }} <br/>
				Jumlah Data : {{ $transaksi->total() }} <br/>
				Data Per Halaman : {{ $transaksi->perPage() }} <br/>
				<br/> -->
 
				{{ $transaksi->links() }}
            
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
