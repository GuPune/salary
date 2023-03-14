<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //


        $a = Auth::user();
        if(!$a){
            abort(403, 'Permission');
        }

        $getemployee = Employee::all();

        return view('employee.index')->with('employee',$getemployee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('employee.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "card" => "required|numeric|min:13|unique:employee",
        ]);




        $shell_category = Employee::create([
            "fname" =>  $request->fname,
            "lname" =>  $request->lname,
            "code" =>  $request->code,
            "card" =>  $request->card,
            "credit" =>  $request->credit,
            "bank" =>  $request->bank,
            "base_salary" =>  $request->base_salary,
            "base_salary_position" =>  $request->base_salary_position
        ]);


        $inusers = User::create([
            "card" =>  $request->card,
            "password" =>  $request->credit,
            'email' => $request->fname,
		    'password' => Hash::make('12345678'),
		    'name' => $request->fname,
		    'is_admin' => 0,
		    'created_at' => date('Y-m-d H:i:s')
        ]);



        return redirect()->route('employee.index')
        ->with('success','Employee created successfully');
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
$getedit = Employee::find($id);


        return view('employee.formedit')->with('employee',$getedit);
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



        $affectedRows = Employee::where("id", $id)->update([
            "fname" =>  $request->fname,
            "lname" =>  $request->lname,
            "code" =>  $request->code,
            "card" =>  $request->card,
            "credit" =>  $request->credit,
            "bank" =>  $request->bank
        ]);



        return redirect()->route('employee.index')
        ->with('success','Employee Update successfully');
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


        $delete = Employee::where('id',$id)->delete();

        return response()->json([
            'msg_return' => 'ลบสำเร็จ',
            'code_return' => 1,
        ]);

    }

    public function autocomplete(Request $request)
    {
        $data = [];

        if($request->filled('q')){
            $data = Employee::select("fname", "id","lname","code","base_salary","base_salary_position")
                        ->where('code', 'LIKE', '%'. $request->get('q'). '%')
                        ->get();
        }

        return response()->json($data);
    }

    public function autocompleteid(Request $request,$id)
    {

        $data = [];

        if($id){
            $data = Employee::select("fname", "id","lname","code","base_salary","base_salary_position")
                        ->where('id', $id)
                        ->first();
        }

        return response()->json($data);
    }



}
