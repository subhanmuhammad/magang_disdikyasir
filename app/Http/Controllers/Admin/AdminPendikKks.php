<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendik_kks;
class AdminPendikKks extends Controller
{
    //
	public function pendik_kks(){
		$pendik_kks = Pendik_kks::get();
		return view('users/admin/data_siswa/index', compact('pendik_kks'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$pendik_kks = Pendik_kks::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('pendik_kks'));
	}

	public function store(Request $request){
		$db = new Pendik_kks;
		$db->id 			    = $request->id;
		$db->pendik_id 	 	    = $request->pendik_id;
		$db->kks_no 	        = $request->kks_no ;
		$db->pkh_status	        = $request->pkh_status;
		$db->pkh_nomor 	        = $request->kh_nomor;
		$db->pip_status		    = $request->pip_status;
		$db->pip_alasan		    = $request->pip_alasan	;
		$db->kip_status 	    = $request->kip_status ;
		$db->kip_nomor 	        = $request->kip_nomor ;
		$db->kip_nama_tertera   = $request->kip_nama_tertera;
		$db->kip_alasan_menolok = $request->kip_alasan_menolok;
        $db->no_akta_kelahiran  = $request->no_akta_kelahiran;
	
		
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
		$db =Pendik_kks::where('id', $request->id)->first();
		$db->pendik_id 		    = $request->pendik_id;
		$db->kks_no 	        = $request->kks_no ;
		$db->pkh_status	        = $request->pkh_status;
		$db->pkh_nomor 	        = $request->kh_nomor;
		$db->pip_status		    = $request->pip_status;
		$db->pip_alasan		    = $request->pip_alasan	;
		$db->kip_status 	    = $request->kip_status ;
		$db->kip_nomor 	        = $request->kip_nomor ;
		$db->kip_nama_tertera   = $request->kip_nama_tertera;
		$db->kip_alasan_menolok = $request->kip_alasan_menolok;
        $db->no_akta_kelahiran  = $request->no_akta_kelahiran;
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
		Pendik_kks::where('id', $request->id)->delete();
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
