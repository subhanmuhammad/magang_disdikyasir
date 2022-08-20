<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//API DATA
Route::get('/data_kejuruan', [ApiController::class, 'data_kejuruan']);
Route::get('/sarpras', [ApiController::class, 'sarpras']);
Route::get('/ekskul', [ApiController::class, 'ekskul']);
Route::get('/siswa', [ApiController::class, 'siswa']);
Route::get('/guru', [ApiController::class, 'guru']);
Route::get('/berita', [ApiController::class, 'berita']);



//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::get('/profile', function(Request $request) {
    return $request->user();
});

Route::resource('programs', App\Http\Controllers\API\ProgramController::class);

 // API route for logout user
 Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

});

