<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCategory extends Model
{
    use HasFactory;
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
    public function feecategoryamounts()
    {
        return $this->hasMany(FeeCategoryAmount::class, 'fee_category_id', 'id');
    }
}
