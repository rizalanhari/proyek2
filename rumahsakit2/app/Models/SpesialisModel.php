<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpesialisModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'spesialis';
    protected $primaryKey = 'id_spesialis';
    protected $fillable = ['nama_spesialis'];
}
