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
 
				<h3>Data Koordinator</h3>
 
				<p>Cari Koordinator :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/koordinator/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Koordinator .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">       
                    <a href="/transaksi" class="btn btn-primary ml-3">Kembali</a>                    
				</form>
 
				<br/>
                
                <div style="overflow-x:auto;">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telpon</th>
                            <th>Tgl. Masuk</th>
                            <th>No. Anggota</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($koordinator as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telpon }}</td>
                            <td>{{ $data->tgl_masuk }}</td>
                            <td>{{ $data->no_anggota }}</td>                            
                            <td style="white-space:nowrap;">
                                <a class="btn btn-warning btn-sm" href="/koordinator/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/koordinator/delete/{{ $data->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
 
				<br/>
				Halaman : {{ $koordinator->currentPage() }} <br/>
				Jumlah Data : {{ $koordinator->total() }} <br/>
				Data Per Halaman : {{ $koordinator->perPage() }} <br/>
				<br/>
 
				{{ $koordinator->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>