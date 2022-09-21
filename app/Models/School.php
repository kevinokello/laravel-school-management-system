<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location'
    ];
    public function students()
    {
        return $this->hasMany(Student::class, 'school_id', 'id');
    }
    public function cohorts()
    {
        return $this->hasMany(Cohort::class, 'school_id', 'id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'school_id', 'id');
    }
    public function units()
    {
        return $this->hasMany(Unit::class, 'school_id', 'id');
    }
    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'school_id', 'id');
    }
    public function categories()
    {
        return $this->hasMany(Category::class, 'school_id', 'id');
    }
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'school_id', 'id');
    }
    public function studentfees()
    {
        return $this->hasMany(StudentFee::class, 'school_id', 'id');
    }
    public function stocks()
    {
        return $this->hasMany(Stock::class, 'school_id', 'id');
    }
    public function stockcategories()
    {
        return $this->hasMany(StockCategory::class, 'school_id', 'id');
    }
    public function sessions()
    {
        return $this->hasMany(Session::class, 'school_id', 'id');
    }
    public function resources()
    {
        return $this->hasMany(Resource::class, 'school_id', 'id');
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'school_id', 'id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'school_id', 'id');
    }
    public function paymentdetails()
    {
        return $this->hasMany(PaymentDetail::class, 'school_id', 'id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'school_id', 'id');
    }
    public function invoicedetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'school_id', 'id');
    }
    public function feecategories()
    {
        return $this->hasMany(FeeCategory::class, 'school_id', 'id');
    }
    public function feecategoryamounts()
    {
        return $this->hasMany(FeeCategoryAmount::class, 'school_id', 'id');
    }
    public function academics()
    {
        return $this->hasMany(Academic::class, 'school_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
