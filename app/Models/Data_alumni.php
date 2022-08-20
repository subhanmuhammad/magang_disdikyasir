<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_alumni extends Model
{
	use HasFactory;
	protected $table = "data_alumni"; 

	public function data_alumni_belongsto(){
		return $this->belongsTo(Data_alumni_belongsto::class);
	}

	public function data_alumni_hasmany(){
		return $this->hasMany(Data_alumni_hasmany::class);
	}

	public function data_alumni_hasone(){
		return $this->hasOne(Data_alumni_hasone::class);
	}

}
