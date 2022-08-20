<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_guru extends Model
{
	use HasFactory;
	protected $table = "data_guru"; 

	public function data_guru_belongsto(){
		return $this->belongsTo(Data_guru_belongsto::class);
	}

	public function data_guru_hasmany(){
		return $this->hasMany(Data_guru_hasmany::class);
	}

	public function data_guru_hasone(){
		return $this->hasOne(Data_guru_hasone::class);
	}

}
