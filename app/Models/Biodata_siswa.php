<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata_siswa extends Model
{
	use HasFactory;
	protected $table = "biodata_siswa"; 

	public function pendik(){
		return $this->belongsTo(Pendik::class);
	}

}
