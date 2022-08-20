<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asal_sekolah;
use Illuminate\Http\Request;
use App\Models\Biodata_siswa;
use App\Models\Pendik_domisili;
use App\Models\Pendik;
use App\Models\Pendik_kks;
use App\Models\Pendik_ortu;
use App\Models\Pendik_periodik;

class AdminBiodataSiswa extends Controller
{
    //
	public function data_siswa(){
		$biodata_siswa = Biodata_siswa::get();
		return view('users/admin/data_siswa/index', compact('biodata_siswa'));
	}

	public function add(){
		return view('users/admin/data_siswa/add');
	}

	public function change($id){
		$biodata_siswa = Biodata_siswa::where('id', $id)->first();
		return view('users/admin/data_siswa/change', compact('biodata_siswa'));
	}

	public function store(Request $request){
		$pendik = Pendik::create([
			'status' => 'Baru',
			'sekolah_id' => Auth()->user()->sekolah_id,
		]);
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();

		$db = new Biodata_siswa;
		$db->id 			  = $request->id;
		$db->pendik_id		  = $pendik->id;
		$db->nama_lengkap 	  = $request->nama_lengkap;
		$db->jenis_kelamin 	  = $request->jenis_kelamin;
		$db->nisn 			  = $request->nisn;
		$db->nis 			  = $request->nis;
		$db->nik 			  = $request->nik;
		$db->tempat_lahir 	  = $request->tempat_lahir;
		$db->tanggal_lahir 	  = $request->tanggal_lahir;
		$db->agama_id 		  = $request->agama_id;
		$db->jurusan 		  = $request->jurusan;
		$db->kebutuhan_khusus = $request->kebutuhan_khusus;
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
		return redirect('/admin/data_siswa')->with($notification); 
	}

	public function update(Request $request){
		$nm = $request->gambar;
		$namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
		$db = Biodata_siswa::where('id', $request->id)->first();
		$db->pendik_id 		  = $request->pendik_id;
		$db->nama_lengkap 	  = $request->nama_lengkap;
		$db->jenis_kelamin 	  = $request->jenis_kelamin;
		$db->nisn 			  = $request->nisn;
		$db->nis 			  = $request->nis;
		$db->nik 			  = $request->nik;
		$db->tempat_lahir 	  = $request->tempat_lahir;
		$db->tanggal_lahir 	  = $request->tanggal_lahir;
		$db->agama_id 		  = $request->agama_id;
		$db->jurusan 		  = $request->jurusan;
		$db->kebutuhan_khusus = $request->kebutuhan_khusus;

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
		return redirect('/admin/data_siswa')->with($notification); 
	}

	public function delete(Request $request){
		Biodata_siswa::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		); 
		return redirect('/admin/data_siswa')->with($notification); 
	}


	public function form_orang_tua($id_pendik){
		$ortu = Pendik_ortu::where('pendik_id', $id_pendik)->first();
		if ($ortu){
			return view('users/admin/data_siswa/orang_tua/form_edit', compact('id_pendik', 'ortu'));
		}
		else {
			return view('users/admin/data_siswa/orang_tua/form_add', compact('id_pendik'));
		}
	}

	public function store_orang_tua(Request $request){
		$db = new Pendik_ortu();
		$db->pendik_id 	 	  = $request->pendik_id;
		$db->ayah_nama 	  = $request->ayah_nama;
		$db->ayah_kebutuhan_khusus	  = $request->ayah_kebutuhan_khusus;
		$db->ayah_pekerjaan			  = $request->ayah_pekerjaan;
		$db->ayah_penghasilan		  = $request->ayah_penghasilan;
		$db->ayah_pendidikan		  = $request->ayah_pendidikan;
		$db->ibu_nama 	  			  = $request->ibu_nama;
		$db->ibu_kebutuhan_khusus 	  = $request->ibu_kebutuhan_khusus;
		$db->ibu_pekerjaan 		      = $request->ibu_pekerjaan;
		$db->ibu_penghasilan 		  = $request->ibu_penghasilan;
		$db->ibu_pendidikan 	  	  = $request->ibu_pendidikan;
		$db->wali_nama	  			  = $request->wali_nama;
		$db->wali_pekerjaan			  = $request->wali_pekerjaan;
		$db->wali_pendidikan		  = $request->wali_pendidikan;
		$db->wali_penghasilan		  = $request->wali_penghasilan;
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

	public function update_orang_tua(Request $request){
		$db = Pendik_ortu::where('id', $request->id)->first();
		$db->ayah_nama 	  = $request->ayah_nama;
		$db->ayah_kebutuhan_khusus	  = $request->ayah_kebutuhan_khusus;
		$db->ayah_pekerjaan			  = $request->ayah_pekerjaan;
		$db->ayah_penghasilan		  = $request->ayah_penghasilan;
		$db->ayah_pendidikan		  = $request->ayah_pendidikan;
		$db->ibu_nama 	  			  = $request->ibu_nama;
		$db->ibu_kebutuhan_khusus 	  = $request->ibu_kebutuhan_khusus;
		$db->ibu_pekerjaan 		      = $request->ibu_pekerjaan;
		$db->ibu_penghasilan 		  = $request->ibu_penghasilan;
		$db->ibu_pendidikan 	  	  = $request->ibu_pendidikan;
		$db->wali_nama	  			  = $request->wali_nama;
		$db->wali_pekerjaan			  = $request->wali_pekerjaan;
		$db->wali_pendidikan		  = $request->wali_pendidikan;
		$db->wali_penghasilan		  = $request->wali_penghasilan;
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



	public function form_asal_sekolah($id_pendik){
		$asal_sekolah = Asal_sekolah::where('pendik_id', $id_pendik)->first();
		if ($asal_sekolah){
			return view('users/admin/data_siswa/asal_sekolah/form_edit', compact('id_pendik', 'asal_sekolah'));
		}
		else {
			return view('users/admin/data_siswa/asal_sekolah/form_add', compact('id_pendik'));
		}
	}
	
	public function store_asal_sekolah(Request $request){
		$db = new Asal_sekolah();
		$db->id 			  = $request->id;
		$db->pendik_id 	 	  = $request->pendik_id;
		$db->nomor_seri_ijazah 	  = $request->nomor_seri_ijazah;
		$db->nomor_seri_skhun	  = $request->nomor_seri_skhun;
		$db->nomor_ujian_nasional		  = $request->nomor_ujian_nasional;
		$db->npsn_sekolah_asal		  = $request->npsn_sekolah_asal;
		$db->nama_sekolah_asal		  = $request->nama_sekolah_asal;
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

	public function update_asal_sekolah(Request $request){
		$db = Asal_sekolah::where('id', $request->id)->first();
		$db->nomor_seri_ijazah 	  = $request->nomor_seri_ijazah;
		$db->nomor_seri_skhun	  = $request->nomor_seri_skhun;
		$db->nomor_ujian_nasional		  = $request->nomor_ujian_nasional;
		$db->npsn_sekolah_asal		  = $request->npsn_sekolah_asal;
		$db->nama_sekolah_asal		  = $request->nama_sekolah_asal;
		$db->save();
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


	public function form_data_periodik($id_pendik){
		$periodik = Pendik_periodik::where('pendik_id', $id_pendik)->first();
		if ($periodik){
			return view('users/admin/data_siswa/data_periodik/form_edit', compact('id_pendik', 'periodik'));
		}
		else {
			return view('users/admin/data_siswa/data_periodik/form_add', compact('id_pendik'));
		}
	}

	public function store_data_periodik(Request $request){
		$db = new Pendik_periodik();
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

	public function update_data_periodik(Request $request){
		$db = Pendik_periodik::where('id', $request->id)->first();
		$db->tinggi_badan 	         = $request->tinggi_badan;
		$db->jarak_tempat_tinggal    = $request->jarak_tempat_tinggal ;
		$db->waktu_tempuh 			 = $request->waktu_tempuh;
		$db->jumlah_saudara_kandung	 = $request->jumlah_saudara_kandung;
		$db->save();
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

	
	
	public function form_data_kks($id_pendik){
		$kks = Pendik_kks::where('pendik_id', $id_pendik)->first();
		if ($kks){
			return view('users/admin/data_siswa/data_kks/form_edit', compact('id_pendik', 'kks'));
		}
		else {
			return view('users/admin/data_siswa/data_kks/form_add', compact('id_pendik'));
		}
	}

	public function store_data_kks(Request $request){
		$db = new Pendik_kks();
		
		$db->pendik_id 	 	    = $request->pendik_id;
		$db->kks_no 	        = $request->kks_no ;
		$db->pkh_status	        = $request->pkh_status;
		$db->pkh_nomor 	        = $request->pkh_nomor;
		$db->pip_status		    = $request->pip_status;
		$db->pip_alasan		    = $request->pip_alasan;
		$db->kip_status 	    = $request->kip_status ;
		$db->kip_nomor 	        = $request->kip_nomor ;
		$db->kip_nama_tertera   = $request->kip_nama_tertera;
		$db->kip_alasan_menolok = $request->kip_alasan_menolok;
        $db->no_akta_lahir  = $request->no_akta_lahir;
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

	public function update_data_kks(Request $request){
		$db = Pendik_kks::where('id', $request->id)->first();
		$db->kks_no 	        = $request->kks_no ;
		$db->pkh_status	        = $request->pkh_status;
		$db->pkh_nomor 	        = $request->pkh_nomor;
		$db->pip_status		    = $request->pip_status;
		$db->pip_alasan		    = $request->pip_alasan;
		$db->kip_status 	    = $request->kip_status ;
		$db->kip_nomor 	        = $request->kip_nomor ;
		$db->kip_nama_tertera   = $request->kip_nama_tertera;
		$db->kip_alasan_menolok = $request->kip_alasan_menolok;
        $db->no_akta_lahir  = $request->no_akta_lahir;
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


	public function form_domisili($id_pendik){
		$domisili = Pendik_domisili::where('pendik_id', $id_pendik)->first();
		if ($domisili){
			return view('users/admin/data_siswa/domisili/form_edit', compact('id_pendik', 'domisili'));
		}
		else {
			return view('users/admin/data_siswa/domisili/form_add', compact('id_pendik'));
		}
	}

	public function store_domisili(Request $request){
		$db = new Pendik_domisili();
		$db->id 			   = $request->id;
		$db->pendik_id 	 	   = $request->pendik_id;
		$db->alamat	           = $request->alamat;
		$db->dusun 	           = $request->dusun ;
		$db->kelurahan 		   = $request->kelurahan ;
		$db->kecamatan 		   = $request->kecamatan;
		$db->kab_kota_id	   = $request->kab_kota_id	;
		$db->transportasi_id   = $request->transportasi_id ;
		$db->jenis_tinggal_id  = $request->jenis_tinggal_id 	;
		
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

	public function update_domisili(Request $request){
		$db = Pendik_domisili::where('id', $request->id)->first();
		$db->kks_no 	        = $request->kks_no ;
		$db->pkh_status	        = $request->pkh_status;
		$db->pkh_nomor 	        = $request->pkh_nomor;
		$db->pip_status		    = $request->pip_status;
		$db->pip_alasan		    = $request->pip_alasan;
		$db->kip_status 	    = $request->kip_status ;
		$db->kip_nomor 	        = $request->kip_nomor ;
		$db->kip_nama_tertera   = $request->kip_nama_tertera;
		$db->kip_alasan_menolok = $request->kip_alasan_menolok;
        $db->no_akta_lahir  = $request->no_akta_lahir;
		$db->save();
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

}
