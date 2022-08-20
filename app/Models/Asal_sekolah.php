<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asal_sekolah extends Model
{
	use HasFactory;
	protected $table = "asal_sekolah"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}
}
