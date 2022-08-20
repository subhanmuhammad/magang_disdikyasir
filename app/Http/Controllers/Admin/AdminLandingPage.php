<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_kejuruan;
use App\Models\Data_sarpras;
use App\Models\Ekstrakulikuler;
use App\Models\Biodata_siswa;
use App\Models\Data_guru;
class AdminLandingPage extends Controller
{
    //
	public function landingpage(){
		$landingpage = Data_kejuruan::get();
		return view('users/landingpage/index', compact('landingpage'));
	}

	public function sarpras(){
		$sarpras = Data_sarpras::get();
		return view('users/landingpage/sarpras', compact('sarpras'));
	}

	public function ekskul(){
		$ekskul = Ekstrakulikuler::get();
		return view('users/landingpage/ekskul', compact('ekskul'));
	}

	public function siswa(){
		$siswa = Biodata_siswa::get();
		return view('users/landingpage/info-siswa/siswa', compact('siswa'));
	}

	public function guru(){
		$guru = Data_guru::get();
		return view('users/landingpage/guru-staff', compact('guru'));
	}

	public function berita(){
		
		return view('users/landingpage/berita/berita');
	}

	public function data_covid(){
		
		return view('users/landingpage/data_covid');
	}

}
