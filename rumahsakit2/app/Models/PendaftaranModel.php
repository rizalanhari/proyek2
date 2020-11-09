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
}
