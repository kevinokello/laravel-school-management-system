<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_name',
        'cohort_id',
        'academic_id'
    ];
    public function cohort()
    {
        return $this->belongsTo(Cohort::class, 'cohort_id', 'id');
    }
    public function academic()
    {
        return $this->belongsTo(Academic::class, 'academic_id', 'id');
    }
    public function students()
    {
        return $this->hasMany(Student::class, 'student_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
