<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendik_periodik extends Model
{
	use HasFactory;
	protected $table = "pendik_periodik"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}
}
