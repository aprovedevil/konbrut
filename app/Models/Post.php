<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'nisn', 'alamat']; //untuk menentukan kolom yang dapat diisi

    public function user()
    {
        return $this->belongsTo(User::class);  //untuk menentukan relasi antara tabel post dan user  or  // belongsTo untuk relasi one to many
    }
}