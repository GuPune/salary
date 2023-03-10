<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    //
    public function index(Request $request)
    {



        $sumpay = DB::table("salary")->whereMonth('day_slip',$request->month)->sum('base_salary');
        $total_money = DB::table("salary")->whereMonth('day_slip',$request->month)->sum('base_month');
        $sumdis = DB::table("salary")->whereMonth('day_slip',$request->month)->sum('total_deduction');
        $sumtotal = DB::table("salary")->whereMonth('day_slip',$request->month)->sum('total_money');
        $cout = DB::table("salary")->whereMonth('day_slip',$request->month)->count();




        return view('report.index')->with('sumpay',$sumpay)->with('sumdis',$sumdis)->with('sumtotal',$sumtotal)->with('count',$cout)->with('base_month',$total_money);

    }


    public function person(Request $request)
    {




        $data = DB::table("salary")->select('salary.employee_id','employee.fname','employee.lname',DB::raw("SUM(salary.base_salary) as base_salary"),DB::raw("SUM(salary.base_month) as base_month"),DB::raw("SUM(salary.total_deduction) as total_deduction"),DB::raw("SUM(salary.total_money) as total_money"))
        ->leftJoin('employee', 'salary.employee_id', '=', 'employee.id')->whereMonth('day_slip',$request->month)
        ->groupBy('salary.employee_id')->get();





        return view('report.person')->with('item',$data);

    }
}
