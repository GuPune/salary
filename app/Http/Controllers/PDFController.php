<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //

    public function generatePDFData(Request $request ,$id)
    {



$salary = Salary::where('id',$id)->first();
$emp = Employee::where('id',$salary->employee_id)->first();


        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'base_salary' => $salary->base_salary,
            'base_salary_position' => $salary->base_salary_position,
            'extra_money' => $salary->extra_money,
            'ot' => $salary->ot,
            'com' => $salary->com,
            'oil' => $salary->oil,
            'base_month' => $salary->base_month,
            'sso' => $salary->sso,
            'fine' => $salary->fine,
            'missing' => $salary->missing,
            'leave' => $salary->leave,
            'late' => $salary->late,
            'advance' => $salary->advance,
            'total_deduction' => $salary->total_deduction,
            'total_money' => $salary->total_money,
            'day_slip' => $salary->day_slip,
            'fname' => $emp->fname,
            'lname' => $emp->lname,
            'code' => $emp->code,
            'credit' => $emp->credit,
            'bank' => $emp->bank,
            'card' => $emp->card,
        ];



        $pdf = PDF::loadView('pdf_view', $data);


        return $pdf->download('salary.pdf');

    }
}
