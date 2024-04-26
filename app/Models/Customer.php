<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $guarded = ['id_customer'];
    // protected $fillable = [
    //     'nama_treatment',
    //     'harga',
    //     'deskripsi',
    // ];

    // public function booking() {
    //     return $this->hasMany(Booking::class);
    // }
}
