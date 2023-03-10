<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'id',
        'fname',
        'lname',
        'code',
        'card',
        'credit',
        'bank',
        'start',
        'end',
        'base_salary',
        'base_salary_position'
    ];
}
