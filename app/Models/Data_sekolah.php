<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_sekolah extends Model
{
    use HasFactory;
    protected $table = "data_sekolah"; 

	public function data_sekolah_belongsto(){
		return $this->belongsTo(Data_sekolah_belongsto::class);
	}

	public function data_sekolah_hasmany(){
		return $this->hasMany(Data_sekolah_hasmany::class);
	}

	public function data_sekolah_hasone(){
		return $this->hasOne(Data_sekolah_hasone::class);
	}

}
