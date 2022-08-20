<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_siswa;
class AdminUserSiswa extends Controller
{
    //
	public function user_siswa(){
		$user_siswa = User_siswa::get();
		return view('users/admin/user_siswa/index', compact('user_siswa'));
	}

	public function add(){
		return view('users/admin/user_siswa/add');
	}

	public function change($id){
		$user_siswa = User_siswa::where('id', $id)->first();
		return view('users/admin/user_siswa/change', compact('user_siswa'));
	}

	public function store(Request $request){
		$db = new User_siswa;
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/user_siswa')->with($notification); 
	}

	public function update(Request $request){
		$db = User_siswa::where('id', $request->id)->first();
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/user_siswa')->with($notification); 
	}

	public function delete(Request $request){
		User_siswa::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/user_siswa')->with($notification); 
	}

}
