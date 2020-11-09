<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokterModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $fillable = ['nama_depan', 'nama_belakang', 'alamat', 'usia', 'no_telepon', 'tarif', 'spesialis_id_spesialis', 'user_id_user', 'poli_id_poli'];
}
