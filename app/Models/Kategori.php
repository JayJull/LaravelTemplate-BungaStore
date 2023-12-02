<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $where = ['kategori_id'];
    public function bunga()
    {
        return $this->hasMany(Bunga::class);
    }
}