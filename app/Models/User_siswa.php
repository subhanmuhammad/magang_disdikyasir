<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_siswa extends Model
{
	use HasFactory;
	protected $table = "user_siswa"; 

	public function user_siswa_belongsto(){
		return $this->belongsTo(User_siswa_belongsto::class);
	}

	public function user_siswa_hasmany(){
		return $this->hasMany(User_siswa_hasmany::class);
	}

	public function user_siswa_hasone(){
		return $this->hasOne(User_siswa_hasone::class);
	}

}
