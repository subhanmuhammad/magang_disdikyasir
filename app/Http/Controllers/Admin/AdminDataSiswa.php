<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_siswa;
class AdminDataSiswa extends Controller
{
    //
	public function data_siswa(){
		$data_siswa = Data_siswa::get();
		return view('users/admin/data_siswa/index', compact('data_siswa'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$data_siswa = Data_siswa::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('data_siswa'));
	}

	public function store(Request $request){
		$db = new Data_siswa;
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_siswa')->with($notification); 
	}

	public function update(Request $request){
		$db = Data_siswa::where('id', $request->id)->first();
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_siswa')->with($notification); 
	}

	public function delete(Request $request){
		Data_siswa::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_siswa')->with($notification); 
	}

}
