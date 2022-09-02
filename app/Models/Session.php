<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_name',
        'cohort_id',
    ];
    public function cohort()
    {
        return $this->belongsTo(Cohort::class, 'cohort_id', 'id');
    }
}
