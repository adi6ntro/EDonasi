@extends('layouts.app')

@section('title', 'Koordinator')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Koordinator</h4>
                        <p class="card-category"> Koordinator dari masing-masing kantor yang terkait</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <form action="/koordinator/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="Pencarian .." value="{{ old('cari') }}" style="color:white;" autocomplete="off">
                    </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-sm" href="/koordinator/add" style="background-color:#2196f3;margin: 1rem 0 0 2.5rem;">
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
                        <th>No. Telpon</th>
                        <th>Tgl. Masuk</th>
                        <th>No. Anggota</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    @foreach($koordinator as $data)   
                    <tr>
                        <td>{{ ( $koordinator->currentPage() - 1 ) * $koordinator->perPage() + $nomer++ }}.</td>
                        <td>{{ $data->nama }}</td>                        
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->telpon }}</td>
                        <td>{{ $data->tgl_masuk }}</td>
                        <td>{{ $data->no_anggota }}</td>
                        <td style="white-space:nowrap;">
                            <a class="btn btn-warning btn-sm" href="/koordinator/edit/{{ $data->id }}" data-toggle="tooltip" title="Edit">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/koordinator/delete/{{ $data->id }}" data-toggle="tooltip" title="Hapus">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- <br/>
				Halaman : {{ $koordinator->currentPage() }} <br/>
				Jumlah Data : {{ $koordinator->total() }} <br/>
				Data Per Halaman : {{ $koordinator->perPage() }} <br/>
				<br/> -->
 
				{{ $koordinator->links() }}
            
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
