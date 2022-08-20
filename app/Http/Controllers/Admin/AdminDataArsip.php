<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_arsip;
class AdminDataArsip extends Controller
{
    //
	public function data_arsip(){
		$data_arsip = Data_arsip::get();
		return view('users/admin/data_arsip/index', compact('data_arsip'));
	}

	public function add(){
		return view('users/admin/data_arsip/add');
	}

	public function change($id){
		$data_arsip = Data_arsip::where('id', $id)->first();
		return view('users/admin/data_arsip/change', compact('data_arsip'));
	}

	public function store(Request $request){
		$db = new Data_arsip;
		$db->nama_arsip = $request->nama_arsip;
		$db->file = $request->file;
		$db->sekolah_id = $request->sekolah_id;

		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_arsip')->with($notification); 
	}

	public function update(Request $request){
		$db = Data_arsip::where('id', $request->id)->first();
		$db->nama_arsip = $request->nama_arsip;
		$db->file = $request->file;
		$db->sekolah_id = $request->sekolah_id;

		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_arsip')->with($notification); 
	}

	public function delete(Request $request){
		Data_arsip::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_arsip')->with($notification); 
	}

}
