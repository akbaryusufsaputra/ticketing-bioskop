<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ticket;

class ticketcontroller extends Controller
{
    public function index(){
    	$ticket = DB::table('tickets')->get();
    	return view('admin.ticket',['ticket' => $ticket]);
    }

    public function tambah(){
    	return view('admin.ticket-tambah');
    }

    public function store(Request $request){
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

    	DB::table('tickets')->insert([
    		'title' => $request->title,
    		'description' => $request->description,
    		'rating' =>  $request->rating,
    		'category' => $request->category,
    		'harga' => $request->harga,
    		'image' => $nama_file
    	]);
    	return redirect('admin/ticket');
    }

    public function edit($id){
    	$ticket = DB::table('tickets')->where('id',$id)->get();
    	return view('admin.ticket-edit',['ticket' => $ticket]);
    }

    public function update(Request $request, $id){
        $ticket = Ticket::find($id);

        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

         $ticket->title = $request->title;
         $ticket->description = $request->description;
         $ticket->rating = $request->rating;
         $ticket->category = $request->category;
         $ticket->harga = $request->harga;
         $ticket->image = $nama_file;
         $ticket->save();
    	return redirect('admin/ticket');
    }

    public function destroy($id)
    {
    $ticket = Ticket::find($id);
    $ticket->delete();
    return redirect('admin/ticket');
    }

    public function cari(Request $request){
    	$cari = $request->cari;

		$ticket = DB::table('tickets')
		->where('title','like',"%".$cari."%")
		->paginate();
		return view('admin.ticket',['ticket' => $ticket]);
    }

    public function riwayat(){
    	$riwayat = DB::table('transaksis')->get();
    	return view('admin.riwayat',['riwayat' => $riwayat]);
    }
}
