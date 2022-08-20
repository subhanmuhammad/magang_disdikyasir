<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
	use HasFactory;
	protected $table = "infografis"; 

	public function infografis_belongsto(){
		return $this->belongsTo(Infografis_belongsto::class);
	}

	public function infografis_hasmany(){
		return $this->hasMany(Infografis_hasmany::class);
	}

	public function infografis_hasone(){
		return $this->hasOne(Infografis_hasone::class);
	}

}
