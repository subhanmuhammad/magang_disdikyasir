<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AdminDataSekolah;
use App\Http\Controllers\Admin\AdminDataGuru;
use App\Http\Controllers\Admin\AdminDataSiswa;
use App\Http\Controllers\Admin\AdminBiodataSiswa;
use App\Http\Controllers\Admin\AdminPendikOrtu;
use App\Http\Controllers\Admin\AdminAsalSekolah;
use App\Http\Controllers\Admin\AdminPendikPeriodik;
use App\Http\Controllers\Admin\AdminPendikKks;
use App\Http\Controllers\Admin\AdminPendikDomisili;
use App\Http\Controllers\Admin\AdminDataKejuruan;
use App\Http\Controllers\Admin\AdminDataSarpras;
use App\Http\Controllers\Admin\AdminDataAlumni;
use App\Http\Controllers\Admin\AdminDataArsip;
use App\Http\Controllers\Admin\AdminUserSiswa;
use App\Http\Controllers\Admin\AdminInfografis;
use App\Http\Controllers\Admin\AdminEkstrakulikuler;
use App\Http\Controllers\Admin\AdminDataTes;
use App\Http\Controllers\Admin\AdminLandingPage;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=> 'guest'], function() {
	Route::post('/post_login', [AuthController::class, 'post_login']);
	Route::get('/', [AuthController::class, 'login'])->name('login');

	
});


Route::get('/logout', [AuthController::class, 'logout']);



Route::group(['middleware'=> 'auth'], function() {
	Route::post('admin/data_siswa/delete', [AdminDataSiswa::class, 'delete']);
	Route::post('admin/data_siswa/update', [AdminDataSiswa::class, 'update']);
	Route::post('admin/data_siswa/store', [AdminDataSiswa::class, 'store']);
	Route::get('admin/data_siswa/change/{id}', [AdminDataSiswa::class, 'change']);
	Route::get('admin/data_siswa/add', [AdminDataSiswa::class, 'add']);
	Route::get('admin/data_siswa', [AdminDataSiswa::class, 'data_siswa']);

	//Data sekolah
	Route::post('admin/data_sekolah/delete', [AdminDataSekolah::class, 'delete']);
	Route::post('admin/data_sekolah/update', [AdminDataSekolah::class, 'update']);
	Route::post('admin/data_sekolah/store', [AdminDataSekolah::class, 'store']);
	Route::get('admin/data_sekolah/change/{id}', [AdminDataSekolah::class, 'change']);
	Route::get('admin/data_sekolah/add', [AdminDataSekolah::class, 'add']);
	Route::get('admin/data_sekolah', [AdminDataSekolah::class, 'data_sekolah']);

	

	//Data Siswa.
	// ortu
	Route::post('admin/data_siswa/data-ortu/{id}/update', [AdminBiodataSiswa::class, 'update_orang_tua']);
	Route::post('admin/data_siswa/data-ortu/{id}/store', [AdminBiodataSiswa::class, 'store_orang_tua']);
	Route::get('admin/data_siswa/data-ortu/{id}', [AdminBiodataSiswa::class, 'form_orang_tua']);

	// asal sekolah
	Route::post('admin/data_siswa/asal-sekolah/{id}/update', [AdminBiodataSiswa::class, 'update_asal_sekolaH']);
	Route::post('admin/data_siswa/asal-sekolah/{id}/store', [AdminBiodataSiswa::class, 'store_asal_sekolah']);
	Route::get('admin/data_siswa/asal-sekolah/{id}', [AdminBiodataSiswa::class, 'form_asal_sekolah']);

	//periodik
	Route::post('admin/data_siswa/data-periodik/{id}/update', [AdminBiodataSiswa::class, 'update_data_periodik']);
	Route::post('admin/data_siswa/data-periodik/{id}/store', [AdminBiodataSiswa::class, 'store_data_periodik']);
	Route::get('admin/data_siswa/data-periodik/{id}', [AdminBiodataSiswa::class, 'form_data_periodik']);

	
	//domisili
	Route::post('admin/data_siswa/domisili/{id}/update', [AdminBiodataSiswa::class, 'update_domisili']);
	Route::post('admin/data_siswa/domisili/{id}/store', [AdminBiodataSiswa::class, 'store_domisili']);
	Route::get('admin/data_siswa/domisili/{id}', [AdminBiodataSiswa::class, 'form_domisili']);

	Route::get('admin/data_siswa/', [AdminBiodataSiswa::class, 'data_siswa']);

	Route::post('admin/data_siswa/delete', [AdminBiodataSiswa::class, 'delete']);
	Route::post('admin/data_siswa/update', [AdminBiodataSiswa::class, 'update']);
	Route::post('admin/data_siswa/store', [AdminBiodataSiswa::class, 'store']);
	Route::get('admin/data_siswa/change/{id}', [AdminBiodataSiswa::class, 'change']);
	Route::get('admin/data_siswa/add', [AdminBiodataSiswa::class, 'add']);
	Route::get('admin/data_siswa', [AdminBiodataSiswa::class, 'data_siswa']);

	//Data Ortu
	Route::post('admin/pendik_ortu/delete', 	[AdminPendikOrtu::class, 'delete']);
	Route::post('admin/pendik_ortu/update',		[AdminPendikOrtu::class, 'update']);
	Route::post('admin/pendik_ortu/store',	    [AdminPendikOrtu::class, 'store']);
	Route::get('admin/pendik_ortu/change/{id}', [AdminPendikOrtu::class, 'change']);
	Route::get('admin/pendik_ortu/add', 		[AdminPendikOrtu::class, 'add']);
	Route::get('admin/pendik_ortu', 			[AdminPendikOrtu::class, 'pendik_ortu']);

	//Asal Sekolah
	Route::post('admin/asal_sekolah	/delete', 	[AdminAsalSekolah::class, 'delete']);
	Route::post('admin/asal_sekolah/update',		[AdminAsalSekolah::class, 'update']);
	Route::post('admin/asal_sekolah/store',	    [AdminAsalSekolah::class, 'store']);
	Route::get('admin/asal_sekolah/change/{id}', [AdminAsalSekolah::class, 'change']);
	Route::get('admin/asal_sekolah/add', 		[AdminAsalSekolah::class, 'add']);
	Route::get('admin/asal_sekolah', 			[AdminAsalSekolah::class, 'asal_sekolah']);

	//Pendik Periodik
	Route::post('admin/pendik_periodik	/delete', 	[AdminPendikPeriodik::class, 'delete']);
	Route::post('admin/pendik_periodik/update',		[AdminPendikPeriodik::class, 'update']);
	Route::post('admin/pendik_periodik/store',	    [AdminPendikPeriodik::class, 'store']);
	Route::get('admin/pendik_periodik/change/{id}', [AdminPendikPeriodik::class, 'change']);
	Route::get('admin/pendik_periodik/add', 		[AdminPendikPeriodik::class, 'add']);
	Route::get('admin/pendik_periodik', 			[AdminPendikPeriodik::class, 'pendik_periodik']);

	
	//Pendik DOMISILI
	Route::post('admin/pendik_domisili	/delete', 	[AdminPendikDomisili::class, 'delete']);
	Route::post('admin/pendik_domisili/update',		[AdminPendikDomisili::class, 'update']);
	Route::post('admin/pendik_domisili/store',	    [AdminPendikDomisili::class, 'store']);
	Route::get('admin/pendik_domisili/change/{id}', [AdminPendikDomisili::class, 'change']);
	Route::get('admin/pendik_domisili/add', 		[AdminPendikDomisili::class, 'add']);
	Route::get('admin/pendik_domisili', 			[AdminPendikDomisili::class, 'pendik_domisili']);


	//Data Kejuruan
	Route::post('admin/data_kejuruan/delete', [AdminDataKejuruan::class, 'delete']);
	Route::post('admin/data_kejuruan/update', [AdminDataKejuruan::class, 'update']);
	Route::post('admin/data_kejuruan/store', [AdminDataKejuruan::class, 'store']);
	Route::get('admin/data_kejuruan/change/{id}', [AdminDataKejuruan::class, 'change']);
	Route::get('admin/data_kejuruan/add', [AdminDataKejuruan::class, 'add']);
	Route::get('admin/data_kejuruan', [AdminDataKejuruan::class, 'data_kejuruan']);

	//Data Sarpras
	Route::post('admin/data_sarpras/delete', [AdminDataSarpras::class, 'delete']);
	Route::post('admin/data_sarpras/update', [AdminDataSarpras::class, 'update']);
	Route::post('admin/data_sarpras/store', [AdminDataSarpras::class, 'store']);
	Route::get('admin/data_sarpras/change/{id}', [AdminDataSarpras::class, 'change']);
	Route::get('admin/data_sarpras/add', [AdminDataSarpras::class, 'add']);
	Route::get('admin/data_sarpras', [AdminDataSarpras::class, 'data_sarpras']);

	
	

	//Ekstrakulikuler
	Route::post('admin/ekstrakulikuler/delete', [AdminEkstrakulikuler::class, 'delete']);
	Route::post('admin/ekstrakulikuler/update', [AdminEkstrakulikuler::class, 'update']);
	Route::post('admin/ekstrakulikuler/store', [AdminEkstrakulikuler::class, 'store']);
	Route::get('admin/ekstrakulikuler/change/{id}', [AdminEkstrakulikuler::class, 'change']);
	Route::get('admin/ekstrakulikuler/add', [AdminEkstrakulikuler::class, 'add']);
	Route::get('admin/ekstrakulikuler', [AdminEkstrakulikuler::class, 'ekstrakulikuler']);

	//LandingPage
  	Route::get('admin/landingpage', [AdminLandingPage::class, 'landingpage']);
  	Route::get('admin/guru', [AdminLandingPage::class, 'guru']);
  	Route::get('admin/sarpras', [AdminLandingPage::class, 'sarpras']);
  	Route::get('admin/ekskul', [AdminLandingPage::class, 'ekskul']);
  	Route::get('admin/siswa', [AdminLandingPage::class, 'siswa']);
  	Route::get('admin/berita', [AdminLandingPage::class, 'berita']);
  	Route::get('admin/data_covid', [AdminLandingPage::class, 'data_covid']);
	

	//guru-staff
	Route::post('admin/data_guru/delete', [AdminDataGuru::class, 'delete']);
	Route::post('admin/data_guru/update', [AdminDataGuru::class, 'update']);
	Route::post('admin/data_guru/store', [AdminDataGuru::class, 'store']);
	Route::get('admin/data_guru/change/{id}', [AdminDataGuru::class, 'change']);
	Route::get('admin/data_guru/add', [AdminDataGuru::class, 'add']);
	Route::get('admin/data_guru', [AdminDataGuru::class, 'data_guru']);
});




