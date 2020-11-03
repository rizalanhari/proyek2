<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliModel extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'poli';
    protected $primaryKey = 'id_poli';
}
