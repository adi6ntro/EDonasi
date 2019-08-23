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
 
				<h3>Data Referensi Donasi</h3>
 
				<p>Cari Referensi Donasi :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/reff_donasi/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Ref. Donasi .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">                    
				</form>
 
				<br/>
                
                <div style="overflow-x:auto;">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($reff_donasi as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->keterangan }}</td>                          
                            <td style="white-space:nowrap;">
                                <a class="btn btn-warning btn-sm" href="/reff_donasi/edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/reff_donasi/delete/{{ $data->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
 
				<br/>
				Halaman : {{ $reff_donasi->currentPage() }} <br/>
				Jumlah Data : {{ $reff_donasi->total() }} <br/>
				Data Per Halaman : {{ $reff_donasi->perPage() }} <br/>
				<br/>
 
				{{ $reff_donasi->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>