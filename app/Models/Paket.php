<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'pakets';
    protected $fillable = ['namaPaket', 'destinasi', 'lokasi', 'harga'];
    protected $primaryKey = 'id_paket';
}
