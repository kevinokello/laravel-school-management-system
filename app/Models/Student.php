<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'academic_id',
        // 'cohort_id',
        'session_id',
        'first_name',
        'middle_name',
        'last_name',
        'religion',
        'gender',
        'location_id',
        'email',
        'date_of_birth',
        'mobile',
        'admission_date',
        'admission_number',
        'previous_school_details',
        'additional_notes',
        'medical_condition',

    ];
    protected $casts = [
        'parent_info1' => 'array',
    ];
    public function academic()
    {
        return $this->belongsTo(Academic::class, 'academic_id', 'id');
    }
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }
    public function cohort()
    {
        return $this->belongsTo(Cohort::class, 'cohort_id', 'id');
    }
    public function studentfee()
    {
        return $this->belongsTo(StudentFee::class, 'fee_id', 'id');
    }

}
