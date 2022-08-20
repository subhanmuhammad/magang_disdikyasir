<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_sekolah;
class AdminDataSekolah extends Controller
{
    //
	public function data_sekolah(){
		$data_sekolah = Data_sekolah::get();
		return view('users/admin/data_sekolah/index', compact('data_sekolah'));
	}

	public function add(){
		return view('users/admin/data_sekolah/add');
	}

	public function change($id){
		$data_sekolah = Data_sekolah::where('id', $id)->first();
		return view('users/admin/data_sekolah/change', compact('data_sekolah'));
	}

	public function store(Request $request){
		$db = new Data_sekolah;
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sekolah')->with($notification); 
	}

	public function update(Request $request){
		$db = Data_sekolah::where('id', $request->id)->first();
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sekolah')->with($notification); 
	}

	public function delete(Request $request){
		Data_sekolah::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_sekolah')->with($notification); 
	}

}
