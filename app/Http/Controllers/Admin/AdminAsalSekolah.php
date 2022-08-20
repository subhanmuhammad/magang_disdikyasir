<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asal_sekolah;
class AdminAsalSekolah extends Controller
{
    //
	public function asal_sekolah(){
		$asal_sekolah = Asal_sekolah::get();
		return view('users/admin/data_siswa/index', compact('asal_sekolah'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$biodata_siswa =Asal_sekolah::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('asal_sekolah'));
	}

	public function store(Request $request){
		$db = new Asal_sekolah;
		$db->id 			  = $request->id;
		$db->pendik_id 	 	  = $request->pendik_id;
		$db->nomor_seri_ijazah 	    = $request->nomor_seri_ijazah;
		$db->nomor_seri_skhun 	    = $request->nomor_seri_skhun;
		$db->nomor_ujian_nasional   = $request->nomor_ujian_nasional	;
		$db->npsn_asal_sekolah 	    = $request->npsn_asal_sekolah ;
		$db->nama_sekolah_asal 	    = $request->nama_sekolah_asal ;
	
		
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
		$db = Asal_sekolah::where('id', $request->id)->first();
		$db->pendik_id 		        = $request->pendik_id;
		$db->nomor_seri_ijazah 	    = $request->nomor_seri_ijazah;
		$db->nomor_seri_skhun 	    = $request->nomor_seri_skhun;
		$db->nomor_ujian_nasional   = $request->nomor_ujian_nasional	;
		$db->npsn_asal_sekolah 	    = $request->npsn_asal_sekolah ;
		$db->nama_sekolah_asal 	    = $request->nama_sekolah_asal ;
		
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
		Asal_sekolah::where('id', $request->id)->delete();
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
