<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuku extends Model
{
    use HasFactory;

    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class);
    }

    public function rak()
    {
        return $this->belongsTo(DataRak::class);
    }
}
