<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class transaksicontroller extends Controller
{
    public function index($id){
    	$ticket = DB::table('tickets')->where('id',$id)->get();
    	return view('transaksi',['ticket' => $ticket]);
    }

    public function transaksi(Request $request){
    	$kembalian = $request->kembalian;
		if($kembalian<0){
			return view('gagal')->with('messages','Transaksi Gagal Jumlah Bayar kurang Dari Harga Yang Ditentukan!');
		}else{
            transaksi::create([
                'nama' => $request->nama,
                'judul' => $request->judul,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'nominalpembayaran' => $request->nominalpembayaran,
                'kembalian' => $request->kembalian,
                'tanggal' => $request->tanggal
            ]);
            return redirect('berhasil');
        }
    }

    public function gagal(){
        return view('gagal');
    }

    public function berhasil(){
        return view('berhasil');
    }

    public function riwayat(Request $request){
        $nama = Auth::user()->name;
        $ticket = DB::table('transaksis')->where('nama','=',$nama)->get();
    	return view('riwayat',['ticket' => $ticket]);
    }

    public function eticket($id){
        $riwayat = DB::table('transaksis')->where('id',$id)->get();
        return view('e-ticket',['riwayat' => $riwayat]);
    }
}
