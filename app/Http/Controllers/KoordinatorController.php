<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoordinatorController extends Controller
{
    public function index() {
        $koordinator = DB::table('koordinator')->paginate(5);

        return view('/koordinator/koordinator', ['koordinator' => $koordinator]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;

        $koordinator = DB::table('koordinator')
        ->where('nama', 'like', "%".$cari."%")
        ->orWhere('alamat', 'like', "%".$cari."%")
        ->orWhere('telpon', 'like', "%".$cari."%")
        ->orWhere('tgl_masuk', 'like', "%".$cari."%")
        ->orWhere('no_anggota', 'like', "%".$cari."%")
        ->paginate();

        return view('/koordinator/koordinator', ['koordinator' => $koordinator]);
    }

    public function edit($id) {
        $koordinator = DB::table('koordinator')->find($id);

        return view('/koordinator/edit_koordinator', ['koordinator' => $koordinator]);
    }

    public function update(Request $request) {
        DB::table('koordinator')->where('id', $request->id)->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telpon'    => $request->telpon,
            'tgl_masuk' => $request->tgl_masuk,
            'no_anggota'=> $request->no_anggota
        ]);

        return redirect('/koordinator');
    }

    public function delete($id) {
        DB::table('koordinator')->where('id', $id)->delete();

        return redirect('/koordinator');
    }
}
