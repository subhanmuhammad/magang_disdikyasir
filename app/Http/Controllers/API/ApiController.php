<?php

namespace App\Http\Controllers\API;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_kejuruan;
use App\Models\Data_sarpras;
use App\Models\Ekstrakulikuler;
use App\Models\Biodata_siswa;
use App\Models\Data_guru;
use App\Models\Beritas;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_kejuruan()
    {
        $data = Data_kejuruan::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function sarpras()
    {
        $data = Data_sarpras::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function ekskul()
    {
        $data = Ekstrakulikuler::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function siswa()
    {
        $data = Biodata_siswa::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function guru()
    {
        $data = Data_guru::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function berita()
    {
        $data = Beritas::all();

        if($data){
            return ApiFormatter::createApi($data);
        }

        else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
