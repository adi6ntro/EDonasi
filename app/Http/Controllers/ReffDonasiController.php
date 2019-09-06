<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReffDonasiController extends Controller
{
    public function index() {
        $reff_donasi = DB::table('reff_donasi')->paginate(5);

        return view('/reff_donasi/reff_donasi', ['reff_donasi' => $reff_donasi, 'nomer' => 1]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;

        $reff_donasi = DB::table('reff_donasi')
        ->where('nama', 'like', "%".$cari."%")
        ->orWhere('keterangan', 'like', "%".$cari."%")
        ->paginate();

        return view('/reff_donasi/reff_donasi', ['reff_donasi' => $reff_donasi, 'nomer' => 1]);
    }

    public function add() {
        return view('/reff_donasi/add_reff_donasi');
    }

    public function save(Request $request) {
        DB::table('reff_donasi')->insert([
            'nama'      => $request->nama,
            'keterangan'=> $request->keterangan
        ]);

        return redirect('/reff_donasi');
    }

    public function edit($id) {
        $reff_donasi = DB::table('reff_donasi')->find($id);

        return view('/reff_donasi/edit_reff_donasi', ['reff_donasi' => $reff_donasi]);
    }

    public function update(Request $request) {
        DB::table('reff_donasi')->where('id', $request->id)->update([
            'nama'      => $request->nama,
            'keterangan'    => $request->keterangan
        ]);

        return redirect('/reff_donasi');
    }

    public function delete($id) {
        DB::table('reff_donasi')->where('id', $id)->delete();

        return redirect('/reff_donasi');
    }
}
