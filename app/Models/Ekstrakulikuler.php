<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
	use HasFactory;
	protected $table = "ekstrakulikuler"; 

	public function ekstrakulikuler_belongsto(){
		return $this->belongsTo(Ekstrakulikuler_belongsto::class);
	}

	public function ekstrakulikuler_hasmany(){
		return $this->hasMany(Ekstrakulikuler_hasmany::class);
	}

	public function ekstrakulikuler_hasone(){
		return $this->hasOne(Ekstrakulikuler_hasone::class);
	}

}
