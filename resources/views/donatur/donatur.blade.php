@extends('layouts.app')

@section('title', 'Donatur')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data donatur</h4>
                        <p class="card-category"> Donatur yang menyisihkan sebagian hartanya untuk kepedulian</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <form action="/donatur/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="Pencarian .." value="{{ old('cari') }}" style="color:white;" autocomplete="off">
                    </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-sm" href="/donatur/add" style="background-color:#2196f3;margin: 1rem 0 0 2.5rem;">
                    <i class="material-icons">queue</i>
                    Tambah Data
                </a>            
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-info">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
						<th>No. Telepon</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    @foreach($donatur as $data)   
                    <tr>
                        <td>{{ ( $donatur->currentPage() - 1 ) * $donatur->perPage() + $nomer++ }}.</td>
                        <td>{{ $data->nama }}</td>
						<td>{{ $data->alamat }}</td>
						<td>{{ $data->telpon }}</td>
                        <td style="white-space:nowrap;">
                            <a class="btn btn-warning btn-sm" href="/donatur/edit/{{ $data->id }}" data-toggle="tooltip" title="Edit">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/donatur/delete/{{ $data->id }}" data-toggle="tooltip" title="Hapus">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- <br/>
				Halaman : {{ $donatur->currentPage() }} <br/>
				Jumlah Data : {{ $donatur->total() }} <br/>
				Data Per Halaman : {{ $donatur->perPage() }} <br/>
				<br/> -->
 
				{{ $donatur->links() }}
            
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
