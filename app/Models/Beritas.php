<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritas extends Model
{
	use HasFactory;
	protected $table = "berita"; 

	public function berita_belongsto(){
		return $this->belongsTo(Beritas_belongsto::class);
	}

	public function berita_hasmany(){
		return $this->hasMany(Beritas_hasmany::class);
	}

	public function berita_hasone(){
		return $this->hasOne(Beritas_hasone::class);
	}

}