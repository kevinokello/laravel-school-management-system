<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table = 'academics';
    protected $fillable = [
        'academic_year',
    ];

    // public function students()
    // {
    //     return $this->hasMany(Student::class, 'academic_id', 'id');
    // }

}
