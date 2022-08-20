<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendik extends Model
{
    use HasFactory;
    protected $table = "pendik"; 
    protected $fillable = [
        'status',
        'sekolah_id',
    ];

    public function pendik_ortu(){
		return $this->hasOne(Pendik_ortu::class);
	}

    public function biodata_siswa(){
		return $this->hasOne(Biodata_siswa::class);
	}

    public function asal_sekolah(){
		return $this->hasOne(Asal_sekolah::class);
	}

    public function pendik_periodik(){
		return $this->hasOne(Pendik_periodik::class);
	}

    public function pendik_kks(){
		return $this->hasOne(Pendik_kks::class);
	}

    public function pendik_domisili(){
		return $this->hasOne(Pendik_domisili::class);
	}

}