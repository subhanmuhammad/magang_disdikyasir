<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Infografis;
class AdminInfografis extends Controller
{
    //
	public function infografis(){
		$infografis = Infografis::get();
		return view('users/admin/infografis/index', compact('infografis'));
	}

	public function add(){
		return view('users/admin/infografis/add');
	}

	public function change($id){
		$infografis = Infografis::where('id', $id)->first();
		return view('users/admin/infografis/change', compact('infografis'));
	}

	public function store(Request $request){
		$db = new Infografis;
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/infografis')->with($notification); 
	}

	public function update(Request $request){
		$db = Infografis::where('id', $request->id)->first();
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/infografis')->with($notification); 
	}

	public function delete(Request $request){
		Infografis::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/infografis')->with($notification); 
	}

}
