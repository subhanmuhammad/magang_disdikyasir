<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_siswa extends Model
{
	use HasFactory;
	protected $table = "data_siswa"; 

	public function data_siswa_belongsto(){
		return $this->belongsTo(Data_siswa_belongsto::class);
	}

	public function data_siswa_hasmany(){
		return $this->hasMany(Data_siswa_hasmany::class);
	}

	public function data_siswa_hasone(){
		return $this->hasOne(Data_siswa_hasone::class);
	}

}
