<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = ['tanggal_pendaftaran', 'pasien_id_pasien', 'dokter_id_dokter', 'poli_id_poli', 'biaya_id_biaya', 'status_id_status'];
}
