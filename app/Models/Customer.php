<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'customer';
    protected $primaryKey = 'id';
    // protected $guarded = ['id_customer'];
    protected $fillable = [
        // 'id_customer',
        'email',
        'no_telp',
        'nama_lengkap',
        'password',
        'pertanyaan_keamanan',
        'jawaban',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function booking() {
    //     return $this->hasMany(Booking::class);
    // }
    public function transaksi() {
        return $this->hasMany(Transaksi::class, 'id_transaksi');
    }
}