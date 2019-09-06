<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = DB::table('donatur as don')
        ->join('trx_masuk as trx', 'don.id', '=', 'trx.donatur_id')
        ->join('v_koordinator_kantor as vkoor', 'vkoor.id', '=', 'trx.koordinator_id')
        ->join('reff_donasi as reff', 'reff.id', '=', 'trx.donasi_id')
        ->select('don.nama as nama_donatur', 'don.alamat as alamat_donatur', 'don.telpon as telpon_donatur', 
                'trx.id', 'trx.no_transaksi', 'trx.jumlah', 'trx.tgl_transaksi', 
                'reff.nama as nama_donasi', 'reff.keterangan',
                'vkoor.nama_koor', 'vkoor.alamat_koor', 'vkoor.telpon_koor', 'vkoor.tgl_masuk',
                'vkoor.no_anggota', 'vkoor.nama_kantor', 'vkoor.alamat_kantor')
        ->paginate(3);

        return view('/transaksi', ['transaksi' => $transaksi, 'nomer' => 1]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;

        $transaksi = DB::table('donatur as don')
        ->join('trx_masuk as trx', 'don.id', '=', 'trx.donatur_id')
        ->join('v_koordinator_kantor as vkoor', 'vkoor.id', '=', 'trx.koordinator_id')
        ->join('reff_donasi as reff', 'reff.id', '=', 'trx.donasi_id')
        ->select('don.nama as nama_donatur', 'don.alamat as alamat_donatur', 'don.telpon as telpon_donatur', 
                'trx.id', 'trx.no_transaksi', 'trx.jumlah', 'trx.tgl_transaksi', 
                'reff.nama as nama_donasi', 'reff.keterangan',
                'vkoor.nama_koor', 'vkoor.alamat_koor', 'vkoor.telpon_koor', 'vkoor.tgl_masuk',
                'vkoor.no_anggota', 'vkoor.nama_kantor', 'vkoor.alamat_kantor')
        ->where('trx.no_transaksi', 'like', "%".$cari."%")
        ->orWhere('trx.jumlah', 'like', "%".$cari."%")
        ->orWhere('trx.tgl_transaksi', 'like', "%".$cari."%")
        ->paginate(3);

        return view('/transaksi', ['transaksi' => $transaksi, 'nomer' => 1]);
    }

    public function add() {
        $koordinator = DB::table('koordinator')->get();
        $transaksi   = DB::table('trx_masuk')->latest('no_transaksi')->first();        
        $donatur     = DB::table('donatur')->get();
        $reff_donasi = DB::table('reff_donasi')->get(); 
        $koordinator = DB::table('koordinator')->get();                       
        $no_transaksi   = substr($transaksi->no_transaksi, 4);
        
        return view('/trx_masuk/add_trx_masuk', ['koordinator' => $koordinator, 'no_transaksi' => $no_transaksi, 'donatur' => $donatur, 'reff_donasi' => $reff_donasi, 'koordinator' => $koordinator]);
    }

    public function save(Request $request) {
        $tgl_masuk = date_create(substr($request->tgl_transaksi, 0, 15));

        DB::table('trx_masuk')->insert([
            'donatur_id'    => $request->donatur_id,
            'no_transaksi'  => $request->no_transaksi,
            'jumlah'        => $request->jumlah,
            'tgl_transaksi' => date_format($tgl_masuk, 'Y-m-d H:i:s'),
            'donasi_id'     => $request->donasi_id,
            'koordinator_id'=> $request->koordinator_id
        ]);

        return redirect('/transaksi');
    }

    public function edit($id) {
        $trx_masuk = DB::table('donatur as don')
        ->join('trx_masuk as trx', 'don.id', '=', 'trx.donatur_id')
        ->join('v_koordinator_kantor as vkoor', 'vkoor.id', '=', 'trx.koordinator_id')
        ->join('reff_donasi as reff', 'reff.id', '=', 'trx.donasi_id')
        ->select('don.nama as nama_donatur', 'don.id as donatur_id', 'don.alamat as alamat_donatur', 'don.telpon as telpon_donatur', 
                'trx.id', 'trx.no_transaksi', 'trx.jumlah', 'trx.tgl_transaksi', 
                'reff.id as reff_donasi_id', 'reff.nama as nama_donasi', 'reff.keterangan',
                'vkoor.id as koordinator_id', 'vkoor.nama_koor', 'vkoor.alamat_koor', 'vkoor.telpon_koor', 'vkoor.tgl_masuk',
                'vkoor.no_anggota', 'vkoor.nama_kantor', 'vkoor.alamat_kantor')
        ->where('trx.id', $id)
        ->get();
        
        $donatur = DB::table('donatur')->get();
        $reff_donasi = DB::table('reff_donasi')->get(); 
        $koordinator = DB::table('koordinator')->get();                       
        
        return view('/trx_masuk/edit_trx_masuk', ['trx_masuk' => $trx_masuk, 'donatur' => $donatur, 'reff_donasi' => $reff_donasi, 'koordinator' => $koordinator]);
    }

    public function update(Request $request) {
        $tgl_masuk = date_create(substr($request->tgl_transaksi, 0, 15));

        DB::table('trx_masuk')->where('id', $request->id)->update([
            'donatur_id'    => $request->donatur_id,
            'jumlah'        => $request->jumlah,
            'tgl_transaksi' => date_format($tgl_masuk, 'Y-m-d H:i:s'),
            'donasi_id'     => $request->donasi_id,
            'koordinator_id'=> $request->koordinator_id
        ]);

        return redirect('/transaksi');
    }

    public function delete($no_transaksi) {
        DB::table('trx_masuk')->where('no_transaksi', $no_transaksi)->delete();

        return redirect('/transaksi');
    }
}