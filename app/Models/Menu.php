<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $guarded = ['id_menu'];
    protected $fillable = [
        'nama_treatment',
        'harga',
        'deskripsi',
    ];
}
