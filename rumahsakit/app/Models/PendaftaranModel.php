<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
}
