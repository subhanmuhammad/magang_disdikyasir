<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_sarpras extends Model
{
	use HasFactory;
	protected $table = "data_sarpras"; 

	public function data_sarpras_belongsto(){
		return $this->belongsTo(Data_sarpras_belongsto::class);
	}

	public function data_sarpras_hasmany(){
		return $this->hasMany(Data_sarpras_hasmany::class);
	}

	public function data_sarpras_hasone(){
		return $this->hasOne(Data_sarpras_hasone::class);
	}

}
