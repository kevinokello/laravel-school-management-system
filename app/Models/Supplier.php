<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function unit()
    {
        return $this->belongsTo(StockCategory::class, 'unit_id', 'id');
    }
}
