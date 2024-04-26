<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';
    protected $guarded = ['id_booking'];

    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }
}
