<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function customer(){
    	return $this->hasOne(Customer::class);
    }
    public function menu()
{
    return $this->belongsTo(Menu::class, 'menu_id');
}
}
