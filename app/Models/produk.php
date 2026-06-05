<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;

class produk extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}