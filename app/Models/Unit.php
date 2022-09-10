<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function categories()
    {
        return $this->hasMany(StockCategory::class, 'unit_id', 'id');
    }
    // public function suppliers()
    // {
    //     return $this->hasMany(Supplier::class, 'unit_id', 'id');
    // }

}
