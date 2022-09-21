<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'subcategory_id', 'id');
    }
    public function resources()
    {
        return $this->hasMany(Resource::class, 'category_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
