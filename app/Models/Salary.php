<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salary';

    protected $fillable = [
        'id',
        'base_salary',
        'base_salary_position',
        'extra_money',
        'ot',
        'com',
        'oil',
        'base_month',
        'total_money',
        'missing',
        'leave',
        'late',
        'advance',
        'fine',
        'sso',
        'total_deduction',
        'work_day',
        'work_ot_hour',
        'work_ot_day',
        'day_slip',
        'employee_id',
        'day_slip_confirm'
    ];


}
