<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendik_ortu;
class AdminPendikOrtu extends Controller
{
    //
	public function pendik_ortu(){
		$pendik_ortu = Pendik_ortu::get();
		return view('users/admin/data_siswa/index', compact('pendik_ortu'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$pendik_ortu = Pendik_ortu::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('pendik_ortu'));
	}

	public function store(Request $request){
		$db = new Pendik_ortu;
		$db->id 			  = $request->id;
		$db->pendik_id 	 	  = $request->pendik_id;
		$db->ayah_nama 	             = $request->ayah_nama ;
		$db->ayah_kebutuhan_khusus   = $request->ayah_kebutuhan_khusus;
		$db->ayah_pekerjaan		     = $request->ayah_pekerjaan	;
		$db->ayah_penghasilan		 = $request->ayah_penghasilan;
		$db->ayah_pendidikan 	     = $request->ayah_pendidikan;
		$db->ibu_nama  	             = $request->ibu_nama ;
		$db->ibu_kebutuhan_khusus 	 = $request->ibu_kebutuhan_khusus;
		$db->ibu_pekerjaan			 = $request->ibu_pekerjaan;
		$db->ibu_pendidikan          = $request->ibu_pendidikan;
        $db->wali_nama 	             = $request->wali_nama ;
        $db->wali_pekerjaan     	 = $request->wali_pekerjaan	;
        $db->wali_pendidikan         = $request->wali_pendidikan;
        $db->ayah_penghasilan	     = $request->ayah_penghasilan;

	
		
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
		$db = Pendik_ortu::where('id', $request->id)->first();
		$db->pendik_id 		         = $request->pendik_id;
		$db->ayah_nama 	             = $request->ayah_nama ;
		$db->ayah_kebutuhan_khusus   = $request->ayah_kebutuhan_khusus;
		$db->ayah_pekerjaan		     = $request->ayah_pekerjaan	;
		$db->ayah_penghasilan		 = $request->ayah_penghasilan;
		$db->ayah_pendidikan 	     = $request->ayah_pendidikan;
		$db->ibu_nama  	             = $request->ibu_nama ;
		$db->ibu_kebutuhan_khusus 	 = $request->ibu_kebutuhan_khusus;
		$db->ibu_pekerjaan			 = $request->ibu_pekerjaan;
		$db->ibu_pendidikan          = $request->ibu_pendidikan;
        $db->wali_nama 	             = $request->wali_nama ;
        $db->wali_pekerjaan     	 = $request->wali_pekerjaan	;
        $db->wali_pendidikan         = $request->wali_pendidikan;
        $db->ayah_penghasilan	     = $request->ayah_penghasilan;

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
		Pendik_ortu::where('id', $request->id)->delete();
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
