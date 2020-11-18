<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'resep';
    protected $primaryKey = 'id_resep';
    protected $fillable = ['pendaftaran_id_pendaftaran', 'resep', 'tanggal_resep'];
}
