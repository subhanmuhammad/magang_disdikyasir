<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendik_kks extends Model
{
	use HasFactory;
	protected $table = "pendik_kks"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}
}
