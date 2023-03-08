<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_buku',
        'jumlah_pembelian',
        'status',
        'distributor',
        'nama_pembeli',
        'tanggal',
        'pembayaran',
        
    ];
}
