<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendik_domisili;
class AdminPendikDomisili extends Controller
{
    //
	public function pendik_domisili(){
		$pendik_domisili = Pendik_domisili::get();
		return view('users/admin/data_siswa/index', compact('pendik_domisili'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$pendik_domisili = Pendik_domisili::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('pendik_domisili'));
	}

	public function store(Request $request){
		$db = new Pendik_domisili;
		$db->id 			   = $request->id;
		$db->pendik_id 	 	   = $request->pendik_id;
		$db->alamat	           = $request->alamat;
		$db->dusun 	           = $request->dusun ;
		$db->kelurahan 		   = $request->kelurahan ;
		$db->kecamatan 		   = $request->kecamatan;
		$db->kab_kota_id	   = $request->kab_kota_id	;
		$db->transportasi_id   = $request->transportasi_id ;
		$db->jenis_tinggal_id  = $request->jenis_tinggal_id 	;
		$db->lintang 		   = $request->lintang;
		$db->bujur             = $request->bujur ;
	
		
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
		$db = Pendik_domisili::where('id', $request->id)->first();
		$db->pendik_id 		  = $request->pendik_id;
		$db->alamat	           = $request->alamat;
		$db->dusun 	           = $request->dusun ;
		$db->kelurahan 		   = $request->kelurahan ;
		$db->kecamatan 		   = $request->kecamatan;
		$db->kab_kota_id	   = $request->kab_kota_id	;
		$db->transportasi_id   = $request->transportasi_id ;
		$db->jenis_tinggal_id  = $request->jenis_tinggal_id 	;
		$db->lintang 		   = $request->lintang;
		$db->bujur             = $request->bujur ;
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
		Pendik_domisili::where('id', $request->id)->delete();
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
