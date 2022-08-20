<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_kejuruan;
class AdminDataKejuruan extends Controller
{
    //
	public function data_kejuruan(){
		$data_kejuruan = Data_kejuruan::get();
		return view('users/admin/data_kejuruan/index', compact('data_kejuruan'));
	}

	public function add(){
		return view('users/admin/data_kejuruan/add');
	}

	public function change($id){
		$data_kejuruan = Data_kejuruan::where('id', $id)->first();
		return view('users/admin/data_kejuruan/change', compact('data_kejuruan'));
	}

	public function store(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();

		$db = new Data_kejuruan;
		$db->nama_jurusan = $request->nama_jurusan;
		$db->gambar = $namaFile;
	    $db->link = url('/')."/public/img/".$namaFile;
		$db->keterangan = $request->keterangan;
		$db->sekolah_id = $request->sekolah_id;
		$nm->move(public_path().'/img', $namaFile);
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_kejuruan')->with($notification); 
	}

	public function update(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = Data_kejuruan::where('id', $request->id)->first();
		$db->nama_jurusan = $request->nama_jurusan;
		$db->keterangan = $request->keterangan;
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
		return redirect('/admin/data_kejuruan')->with($notification); 
	}

	public function delete(Request $request){
		Data_kejuruan::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_kejuruan')->with($notification); 
	}

}
