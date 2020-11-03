<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
}
