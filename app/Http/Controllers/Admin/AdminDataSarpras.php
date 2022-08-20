<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_sarpras;
class AdminDataSarpras extends Controller
{
    //
	public function data_sarpras(){
		$data_sarpras = Data_sarpras::latest()->get();
		return view('users/admin/data_sarpras/index', compact('data_sarpras'));
	}

	public function add(){
		return view('users/admin/data_sarpras/add');
	}

	public function change($id){
		$data_sarpras = Data_sarpras::where('id', $id)->first();
		return view('users/admin/data_sarpras/change', compact('data_sarpras'));
	}

	public function store(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		
		$db = new Data_sarpras;
		$db->sekolah_id = $request->sekolah_id;
		$db->sarpras_jenis_id = $request->sarpras_jenis_id;
		$db->jumlah = $request->jumlah;
		$db->gambar = $namaFile;
		$db->link = url('/')."/public/img/".$namaFile;
		
		$nm->move(public_path().'/img', $namaFile);
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sarpras')->with($notification); 
	}

	public function update(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = Data_sarpras::where('id', $request->id)->first();
		$db->sarpras_jenis_id = $request->sarpras_jenis_id;
		$db->jumlah = $request->jumlah;
		$db->gambar = $namaFile;
		$db->link = url('/')."/public/img/".$namaFile;
		$nm->move(public_path().'/img', $namaFile);
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sarpras')->with($notification); 
	}

	public function delete(Request $request){
		Data_sarpras::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sarpras')->with($notification); 
	}

}
