<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function booking() {
        return $this->hasMany('booking');
    }
}
