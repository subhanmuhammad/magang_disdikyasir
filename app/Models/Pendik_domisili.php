<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendik_domisili extends Model
{
	use HasFactory;
	protected $table = "pendik_domisili"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}
}
