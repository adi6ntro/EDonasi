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
                    Edit Data Donatur
                </div>
                <div class="card-body">
                    <a href="/donatur" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/donatur/update">

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $donatur->id }}"> <br/>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama donatur .." value=" {{ $donatur->nama }}">

                            <!-- @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat donatur .."> {{ $donatur->alamat }} </textarea>

                             <!-- @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="telpon" class="form-control" placeholder="No. Telelpon donatur .." value=" {{ $donatur->telpon }}">

                             <!-- @if($errors->has('telpon'))
                                <div class="text-danger">
                                    {{ $errors->first('telpon')}}
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