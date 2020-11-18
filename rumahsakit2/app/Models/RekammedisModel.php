<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekammedisModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'rekammedis';
    protected $primaryKey = 'id_rekammedis';
    protected $fillable = ['diagnosa', 'keluhan', 'tanggal_rekam', 'pasien_id_pasien', 'dokter_id_dokter'];
}
