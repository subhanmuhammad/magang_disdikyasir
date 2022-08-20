<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendik_ortu extends Model
{
	use HasFactory;
	protected $table = "pendik_ortu"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}
}
