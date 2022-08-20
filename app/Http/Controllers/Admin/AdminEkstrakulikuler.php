<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;
class AdminEkstrakulikuler extends Controller
{
    //
	public function ekstrakulikuler(){
		$ekstrakulikuler = Ekstrakulikuler::get();
		return view('users/admin/ekstrakulikuler/index', compact('ekstrakulikuler'));
	}

	public function add(){
		return view('users/admin/ekstrakulikuler/add');
	}

	public function change($id){
		$ekstrakulikuler = Ekstrakulikuler::where('id', $id)->first();
		return view('users/admin/ekstrakulikuler/change', compact('ekstrakulikuler'));
	}

	public function store(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = new Ekstrakulikuler;
		$db->nama_ekstrakulikuler = $request->nama_ekstrakulikuler;
		$db->sekolah_id = $request->sekolah_id;
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
		return redirect('/admin/ekstrakulikuler')->with($notification); 
	}

	public function update(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = ekstrakulikuler::where('id', $request->id)->first();
		$db->nama_ekstrakulikuler = $request->nama_ekstrakulikuler;
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
		return redirect('/admin/ekstrakulikuler')->with($notification); 
	}

	public function delete(Request $request){
		ekstrakulikuler::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/ekstrakulikuler')->with($notification); 
	}

}
