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
 
				<h3>Data Donatur</h3>
 
				<p>Cari Donatur :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/donatur/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Donatur .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">                    
				</form>
 
				<br/>
                
                <div style="overflow-x:auto;">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telpon</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($donatur as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telpon }}</td>
                            <td style="white-space:nowrap;">
                                <a class="btn btn-warning btn-sm" href="/donatur/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/donatur/delete/{{ $data->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
 
				<br/>
				Halaman : {{ $donatur->currentPage() }} <br/>
				Jumlah Data : {{ $donatur->total() }} <br/>
				Data Per Halaman : {{ $donatur->perPage() }} <br/>
				<br/>
 
				{{ $donatur->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>