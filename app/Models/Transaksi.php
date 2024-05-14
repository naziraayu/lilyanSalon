<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_transaksi',
        'grand_total',
        'kembalian',
        'bayar',
        'booking_id',
        'menu_id',
        'customer_id'
    ];

    // Method untuk booting model
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transaksi) {
            $transaksi->id_transaksi = self::generateID();
        });
    }

    protected static function generateID()
    {
        $currentTime = now();
        return $currentTime->format('YmdHis');
    }
    
    public function booking(){
    	return $this->belongsTo(Booking::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id', 'id_transaksi');
    }
}
