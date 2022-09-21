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

    public function students()
    {
        return $this->hasMany(Student::class, 'academic_id', 'id');
    }
    public function cohorts()
    {
        return $this->hasMany(Cohort::class, 'academic_id', 'id');
    }
    public function sessions()
    {
        return $this->hasMany(Session::class, 'academic_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
