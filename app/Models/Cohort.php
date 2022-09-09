<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;
    protected $fillable = [
        'cohort_name',
    ];
    public function sessions()
    {
        return $this->hasMany(Session::class, 'session_id', 'id');
    }
    public function academic()
    {
        return $this->belongsTo(Academic::class, 'academic_id', 'id');
    }

}
