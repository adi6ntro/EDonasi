<!DOCTYPE html>
<html>
<head>
	<title>Donasi</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				
				<h2 class="text-center">Donasi</h2>
 
				<h3>Data Transaksi Masuk</h3>
 
				<p>Cari Data Transaksi :</p>
 
				<div class="form-inline">
                    <form action="/transaksi/cari" method="GET" class="form-inline">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Transaksi (No-Trx) .." value="{{ old('cari') }}">
                        <input class="btn btn-primary ml-3" type="submit" value="CARI">                   
                    </form>
                    
                    <div style="margin-left:25rem">
                        <a href="/donatur"><input class="btn btn-danger ml-3" type="button" value="DONATUR"></a>
                        <a href="/koordinator"><input class="btn btn-warning ml-3" type="button" value="KOORDINATOR"></a>
                        <a href="/reff_donasi"><input class="btn btn-success ml-3" type="button" value="REF. DONASI"></a>
                    </div>
                </div>

				<br/>
                
                <div style="overflow-x:auto;">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Donatur</th>
                            <th>Alamat</th>
                            <th>No. Telpon</th>
                            <th>No. Transaksi</th>
                            <th>Jumlah</th>
                            <th>Tgl. Transaksi</th>
                            <th>Nama Donasi</th>
                            <th>Keterangan</th>
                            <th>Nama Koordinator</th>
                            <th>Alamat</th>
                            <th>No. Telpon</th>
                            <th>Tgl. Masuk</th>
                            <th>No. Anggota</th>
                            <th>Nama Kantor</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($transaksi as $data)
                        <tr>
                            <td>{{ $data->nama_donatur }}</td>
                            <td>{{ $data->alamat_donatur }}</td>
                            <td>{{ $data->telpon_donatur }}</td>
                            <td>{{ $data->no_transaksi }}</td>
                            <td>{{ $data->jumlah }}</td>
                            <td>{{ $data->tgl_transaksi }}</td>
                            <td>{{ $data->nama_donasi }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>{{ $data->nama_koor }}</td>
                            <td>{{ $data->alamat_koor }}</td>
                            <td>{{ $data->telpon_koor }}</td>
                            <td>{{ $data->tgl_masuk }}</td>
                            <td>{{ $data->no_anggota }}</td>
                            <td>{{ $data->nama_kantor }}</td>
                            <td>{{ $data->alamat_kantor }}</td>
                            <td style="white-space:nowrap;">
                                <a class="btn btn-warning btn-sm" href="/trx_masuk/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/trx_masuk/delete/{{ $data->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
 
				<br/>
				Halaman : {{ $transaksi->currentPage() }} <br/>
				Jumlah Data : {{ $transaksi->total() }} <br/>
				Data Per Halaman : {{ $transaksi->perPage() }} <br/>
				<br/>
 
				{{ $transaksi->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>