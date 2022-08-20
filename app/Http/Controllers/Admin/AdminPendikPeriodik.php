<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendik_periodik;
class AdminPendikPeriodik extends Controller
{
    //
	public function data_siswa(){
		$pendik_periodik = Pendik_periodik::get();
		return view('users/admin/data_siswa/index', compact('pendik_periodik'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$pendik_periodik = Pendik_periodik::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('pendik_periodik'));
	}

	public function store(Request $request){
		$db = new Pendik_periodik;
		$db->id 			         = $request->id;
		$db->pendik_id 	 	         = $request->pendik_id;
		$db->tinggi_badan 	         = $request->tinggi_badan;
		$db->jarak_tempat_tinggal    = $request->jarak_tempat_tinggal ;
		$db->waktu_tempuh 			 = $request->waktu_tempuh;
		$db->jumlah_saudara_kandung	 = $request->jumlah_saudara_kandung;
		
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
		$db = Pendik_periodik::where('id', $request->id)->first();
		$db->pendik_id 		         = $request->pendik_id;
		$db->tinggi_badan 	         = $request->tinggi_badan;
		$db->jarak_tempat_tinggal    = $request->jarak_tempat_tinggal ;
		$db->waktu_tempuh 			 = $request->waktu_tempuh;
		$db->jumlah_saudara_kandung	 = $request->jumlah_saudara_kandung;
		
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
		Pendik_periodik::where('id', $request->id)->delete();
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
