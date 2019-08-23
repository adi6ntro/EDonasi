<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <title>Donasi</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Data Transaksi
                </div>
                <div class="card-body">
                    <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/trx_masuk/update">

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $trx_masuk->id }}"> <br/>

                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" name="no_transaksi" class="form-control" value=" {{ $trx_masuk->no_transaksi }}" disabled>

                            <!-- @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah .." value=" {{ $trx_masuk->jumlah }}">
                             <!-- @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>