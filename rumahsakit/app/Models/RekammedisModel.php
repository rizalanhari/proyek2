<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekammedisModel extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'rekammedis';
    protected $primaryKey = 'id_rekammedis';
}
