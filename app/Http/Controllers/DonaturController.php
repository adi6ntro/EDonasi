<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonaturController extends Controller
{
    public function index() {
        $donatur = DB::table('donatur')->paginate(5);

        return view('/donatur/donatur', ['donatur' => $donatur]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;

        $donatur = DB::table('donatur')
        ->where('nama', 'like', "%".$cari."%")
        ->orWhere('alamat', 'like', "%".$cari."%")
        ->orWhere('telpon', 'like', "%".$cari."%")
        ->paginate();

        return view('/donatur/donatur', ['donatur' => $donatur]);
    }

    public function edit($id) {
        $donatur = DB::table('donatur')->find($id);

        return view('/donatur/edit_donatur', ['donatur' => $donatur]);
    }

    public function update(Request $request) {
        DB::table('donatur')->where('id', $request->id)->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telpon'    => $request->telpon
        ]);

        return redirect('/donatur');
    }

    public function delete($id) {
        DB::table('donatur')->where('id', $id)->delete();

        return redirect('/donatur');
    }
}
