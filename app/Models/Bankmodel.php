<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankmodel extends Model
{
    use HasFactory;

    protected $table = 'bank';
   
    protected $primaryKey = 'no_rekening';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pks',
        'no_rekening',
        'nama_rekening',
        'no_pks_bank',
        'keterangan',
        'nama_kantor_cabang',
        'nama_kepala_cabang',
        'alamat_bank',
        'no_telp_bank',
        'no_hp_kepala_cabang',
        'email_bank',
        'ttd',
        'stempel',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // You can define casts for specific attributes here if needed
    ];


}
