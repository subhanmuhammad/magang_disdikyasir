<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kejuruan extends Model
{
	use HasFactory;
	protected $table = "data_kejuruan"; 

	public function data_kejuruan_belongsto(){
		return $this->belongsTo(Data_kejuruan_belongsto::class);
	}

	public function data_kejuruan_hasmany(){
		return $this->hasMany(Data_kejuruan_hasmany::class);
	}

	public function data_kejuruan_hasone(){
		return $this->hasOne(Data_kejuruan_hasone::class);
	}

}
