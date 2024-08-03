<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    protected $primaryKey = 'id_konfirmasi';

    protected $fillable = [
        'id_konfirmasi',
        'agenda',
        'id_pks',
        'request',
        'dikerjakan',
        'total',
    ];
}
