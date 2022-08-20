<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_arsip extends Model
{
	use HasFactory;
	protected $table = "data_arsip"; 

	public function data_arsip_belongsto(){
		return $this->belongsTo(Data_arsip_belongsto::class);
	}

	public function data_arsip_hasmany(){
		return $this->hasMany(Data_arsip_hasmany::class);
	}

	public function data_arsip_hasone(){
		return $this->hasOne(Data_arsip_hasone::class);
	}

}
