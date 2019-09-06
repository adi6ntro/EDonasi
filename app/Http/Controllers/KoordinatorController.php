<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoordinatorController extends Controller
{
    public function index() {
        $koordinator = DB::table('koordinator')
        ->join('kantor', 'koordinator.kantor_id', '=', 'kantor.id')
        ->select('koordinator.*', 'kantor.nama as nama_kantor')
        ->paginate(5);

        return view('/koordinator/koordinator', ['koordinator' => $koordinator, 'nomer' => 1]);
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

        return view('/koordinator/koordinator', ['koordinator' => $koordinator, 'nomer' => 1]);
    }

    public function add() {
        $kantor = DB::table('kantor')->get();
        
        return view('/koordinator/add_koordinator', ['kantor' => $kantor]);
    }

    public function save(Request $request) {
        $tgl_masuk = date_create(substr($request->tgl_masuk, 0, 15));
        
        DB::table('koordinator')->insert([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telpon'    => $request->telpon,
            'tgl_masuk' => date_format($tgl_masuk, 'Y-m-d H:i:s'),
            'no_anggota'=> $request->no_anggota,
            'kantor_id' => $request->kantor_id
        ]);

        return redirect('/koordinator');
    }

    public function edit($id) {
        $koordinator = DB::table('koordinator')
        ->join('kantor', 'koordinator.kantor_id', '=', 'kantor.id')
        ->select('koordinator.*', 'kantor.nama as nama_kantor', 'kantor.id as kantor_id')
        ->where('koordinator.id', $id)
        ->get();

        $kantor = DB::table('kantor')->get();

        return view('/koordinator/edit_koordinator', ['koordinator' => $koordinator, 'kantor' => $kantor]);
    }

    public function update(Request $request) {
        $tgl_masuk = date_create(substr($request->tgl_masuk, 0, 15));
        
        DB::table('koordinator')->where('id', $request->id)->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telpon'    => $request->telpon,
            'tgl_masuk' => date_format($tgl_masuk, 'Y-m-d H:i:s'),
            'no_anggota'=> $request->no_anggota
        ]);

        return redirect('/koordinator');
    }

    public function delete($id) {
        DB::table('koordinator')->where('id', $id)->delete();

        return redirect('/koordinator');
    }
}
