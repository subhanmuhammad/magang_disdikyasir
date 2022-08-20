<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_guru;
class AdminDataGuru extends Controller
{
    //
	public function data_guru(){
		$data_guru = Data_guru::get();
		return view('users/admin/data_guru/index', compact('data_guru'));
	}

	public function add(){
		return view('users/admin/data_guru/add');
	}

	public function change($id){
		$data_guru = Data_guru::where('id', $id)->first();
		return view('users/admin/data_guru/change', compact('data_guru'));
	}

	public function store(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = new Data_guru;
		$db->id 			  	= $request->id;
		$db->nama 	  		  	= $request->nama;
		$db->nip 	  			= $request->nip;
		$db->jabatan 			= $request->jabatan;
		$db->tempat_lahir 		= $request->tempat_lahir;
		$db->tanggal_lahir 		= $request->tanggal_lahir;
		$db->jenis_kelamin 	  	= $request->jenis_kelamin;
		$db->agama 	  			= $request->agama;
		$db->mata_pelajaran 	= $request->mata_pelajaran;
		$db->masa_kerja 		= $request->masa_kerja;
		$db->pendik_terakhir 	= $request->pendik_terakhir;
		$db->status_perkawinan 	= $request->status_perkawinan;
		$db->alamat 			= $request->alamat;
		$db->no_hp 				= $request->no_hp;
		$db->gambar 			= $namaFile;
		$db->no_hp 				= $request->no_hp;
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
		return redirect('/admin/data_guru')->with($notification); 
	}

	public function update(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();

		$db = Data_guru::where('id', $request->id)->first();
		$db->nama 	  		  	= $request->nama;
		$db->nip 	  			= $request->nip;
		$db->jabatan 			= $request->jabatan;
		$db->tempat_lahir 		= $request->tempat_lahir;
		$db->tanggal_lahir 		= $request->tanggal_lahir;
		$db->jenis_kelamin 	  	= $request->jenis_kelamin;
		$db->agama 	  			= $request->agama;
		$db->mata_pelajaran 	= $request->mata_pelajaran;
		$db->masa_kerja 		= $request->masa_kerja;
		$db->pendik_terakhir 	= $request->pendik_terakhir;
		$db->status_perkawinan 	= $request->status_perkawinan;
		$db->alamat 			= $request->alamat;
		$db->no_hp 				= $request->no_hp;
		$db->gambar 			= $namaFile;
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
		return redirect('/admin/data_guru')->with($notification); 
	}

	public function delete(Request $request){
		Data_guru::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_guru')->with($notification); 
	}

}
