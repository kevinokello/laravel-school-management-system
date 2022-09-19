<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $table = 'resources';
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'image',
        'name',
        'price',
        'slug',
        'status',
        'featured',
        'recommended',
        'description',
        'body',
        'attatchment',
        'yt_iframe',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }
}
