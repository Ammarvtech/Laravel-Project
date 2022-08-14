<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function scopeSearch($query, $employeeName)
    {
        $query->where('first_name','like','%'.$employeeName.'%');
        return $query->orWhere('last_name','like','%'.$employeeName.'%');
    }
    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
