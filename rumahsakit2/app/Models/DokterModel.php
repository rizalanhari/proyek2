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
}
