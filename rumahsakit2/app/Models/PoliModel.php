<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'poli';
    protected $primaryKey = 'id_poli';
    protected $fillable = ['nama_poli'];
}
