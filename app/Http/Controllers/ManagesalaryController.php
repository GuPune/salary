<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class managesalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $salary = Salary::select("salary.id","employee.fname","employee.lname","employee.code","employee.card","salary.day_slip")
        ->leftJoin('employee', 'employee.id', '=', 'salary.employee_id')
        ->get();



        return view('managesalary.index')->with('salary',$salary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('managesalary.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        $this->validate($request, [
            'code' => 'required',
            'day_slip' => 'required',
        ]);



        $insalary = Salary::create([
        "employee_id" => $request->code,
        "work_day" => $request->work_day,
        "work_ot_day" => $request->work_ot_day,
        "work_ot_hour" => $request->work_ot_hour,
        "base_salary" => $request->base_salary,
        "base_salary_position" => $request->base_salary_position,
        "extra_money" => $request->extra_money,
        "ot" => $request->ot,
        "com" => $request->com,
        "oil" => $request->oil,
        "base_month" => $request->base_month,
        "missing" => $request->missing,
        "leave" => $request->leave,
        "late" => $request->late,
        "advance" => $request->advance,
        "fine" => $request->fine,
        "sso" => $request->sso,
        "total_deduction" => $request->total_deduction,
        "total_money" => $request->total_money,
        "day_slip" => $request->day_slip,

    ]);


    return redirect()->route('managesalary.index')
    ->with('success','Salary created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $salary = Salary::where('id',$id)->first();
        $employ = Employee::where('id',$salary->employee_id)->first();


        return view('managesalary.formedit')->with('salary',$salary)->with('employ',$employ);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $affectedRows = Salary::where("id", $id)->update([
            "work_day" => $request->work_day,
            "work_ot_day" => $request->work_ot_day,
            "work_ot_hour" => $request->work_ot_hour,
            "base_salary" => $request->base_salary,
            "base_salary_position" => $request->base_salary_position,
            "extra_money" => $request->extra_money,
            "ot" => $request->ot,
            "com" => $request->com,
            "oil" => $request->oil,
            "base_month" => $request->base_month,
            "missing" => $request->missing,
            "leave" => $request->leave,
            "late" => $request->late,
            "advance" => $request->advance,
            "fine" => $request->fine,
            "sso" => $request->sso,
            "total_deduction" => $request->total_deduction,
            "total_money" => $request->total_money,
            "day_slip" => $request->day_slip,
        ]);



        return redirect()->route('managesalary.index')
        ->with('success','Salary Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = Salary::where('id',$id)->delete();

    //    $deletefact = FactVote::where('votes_id',$id)->delete();


        return response()->json([
            'msg_return' => 'ลบสำเร็จ',
            'code_return' => 1,
        ]);
    }
}
