@extends('layouts.app')

@section('title', 'Referensi Donasi')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Referensi Donasi</h4>
                        <p class="card-category"> Referensi yang digunakan untuk detail donasi</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <form action="/reff_donasi/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="Pencarian .." value="{{ old('cari') }}" style="color:white;" autocomplete="off">
                    </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-sm" href="/reff_donasi/add" style="background-color:#2196f3;margin: 1rem 0 0 2.5rem;">
                    <i class="material-icons">queue</i>
                    Tambah Data
                </a>            
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-info">
                        <th>No</th>
                        <th>Nama Donasi</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    @foreach($reff_donasi as $data)   
                    <tr>
                        <td>{{ ( $reff_donasi->currentPage() - 1 ) * $reff_donasi->perPage() + $nomer++ }}.</td>
                        <td>{{ $data->nama }}</td>
						<td>{{ $data->keterangan }}</td>
                        <td style="white-space:nowrap;">
                            <a class="btn btn-warning btn-sm" href="/reff_donasi/edit/{{ $data->id }}" data-toggle="tooltip" title="Edit">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/reff_donasi/delete/{{ $data->id }}" data-toggle="tooltip" title="Hapus">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- <br/>
				Halaman : {{ $reff_donasi->currentPage() }} <br/>
				Jumlah Data : {{ $reff_donasi->total() }} <br/>
				Data Per Halaman : {{ $reff_donasi->perPage() }} <br/>
				<br/> -->
 
				{{ $reff_donasi->links() }}
            
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
