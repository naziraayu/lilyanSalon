<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'transaksi_id',
        'menu_id',
        'nama_treatment',
        'harga',
    ];
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'id_transaksi');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
