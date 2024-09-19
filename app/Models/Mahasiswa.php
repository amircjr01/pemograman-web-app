<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Terapkan jika tabel tidak menerapkan aturan default
    protected $table = 'mahasiswa';

    protected $fillable = ['nim', 'nama'];
    // Tetapkan jika primary key bukan id
    protected $primaryKey = 'nim';
    // Terapkan jika primary key bukan id dan bukan incrementing
    public $incrementing = false;
    // Terapkan jika primary key bukan id dan tidak bertipe integer
    protected $keyType = 'string';
    // Terapkan jika di tabel tidak menggunakan timestamps
    public $timestamps = false;

}