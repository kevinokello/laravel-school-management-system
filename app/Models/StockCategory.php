<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCategory extends Model
{
    use HasFactory;
    protected $table = 'stock_categories';
    protected $fillable = [
        'unit_id',
        'name'
    ];
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'supplier_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
