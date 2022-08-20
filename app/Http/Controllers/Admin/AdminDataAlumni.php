<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_alumni;
class AdminDataAlumni extends Controller
{
    //
	public function data_alumni(){
		$data_alumni = Data_alumni::get();
		return view('users/admin/data_alumni/index', compact('data_alumni'));
	}

	public function add(){
		return view('users/admin/data_alumni/add');
	}

	public function change($id){
		$data_alumni = Data_alumni::where('id', $id)->first();
		return view('users/admin/data_alumni/change', compact('data_alumni'));
	}

	public function store(Request $request){
		$db = new Data_alumni;
		$db->nama_alumni = $request->nama_alumni;
		$db->sekolah_id = $request->sekolah_id;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_alumni')->with($notification); 
	}

	public function update(Request $request){
		$db = Data_alumni::where('id', $request->id)->first();
		$db->nama_alumni = $request->nama_alumni;
		$db->sekolah_id = $request->sekolah_id;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_alumni')->with($notification); 
	}

	public function delete(Request $request){
		Data_alumni::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_alumni')->with($notification); 
	}

}
