<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pks extends Model
{
    
    protected $primaryKey = 'id_pks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pks',
        'no_pks',
        'agenda',
        'up3',
        'nama_langganan',
        'nama_pemohon',
        'no_hp',
        'no_ktp',
        'no_npwp',
        'alamat',
        'detil',
        'jenis_permohonan',
        'bank1',
        'bank1_status',
        'bank2',
        'bank2_status',
        'bank3',
        'bank3_status',
        'jenis_rekening',
        'nama_rekening',
        'ttd',
        'stempel',
        'undangan_prob',
        'eviden_prob',
        'ktp',
        'npwp',
        'nib',
        'akta_perusahaan',
        'surat_kuasa',
        'status',
        'biaya_penyambungan',
        'jaminan_langganan',
        'token_perdana',
        'biaya_materai',
        'biaya_transaksi',
        'biaya_permohonan',
        'jumlah_pelanggan',
        'total_daya',
        'ai_mdu',
        'ai_jasa',
        'alasan_reject',
        'tanggal_approve_up3',
        'tanggal_approve_bank',
        'tanggal_approve_pksup3',
        'status_jaringan',
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
