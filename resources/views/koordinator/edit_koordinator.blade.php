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
                    Edit Data Koordinator
                </div>
                <div class="card-body">
                    <a href="/koordinator" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/koordinator/update">

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $koordinator->id }}"> <br/>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama koordinator .." value=" {{ $koordinator->nama }}">

                            <!-- @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat koordinator .."> {{ $koordinator->alamat }} </textarea>

                             <!-- @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="telpon" class="form-control" placeholder="No. Telepon koordinator .." value=" {{ $koordinator->telpon }}">

                             <!-- @if($errors->has('telpon'))
                                <div class="text-danger">
                                    {{ $errors->first('telpon')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>Tgl. Masuk</label>
                            <input type="text" name="tgl_masuk" class="form-control" placeholder="Tgl. Masuk .." value=" {{ $koordinator->tgl_masuk }}">

                             <!-- @if($errors->has('telpon'))
                                <div class="text-danger">
                                    {{ $errors->first('telpon')}}
                                </div>
                            @endif -->

                        </div>

                        <div class="form-group">
                            <label>No. Anggota</label>
                            <input type="text" name="no_anggota" class="form-control" placeholder="No. Anggota .." value=" {{ $koordinator->no_anggota }}">

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