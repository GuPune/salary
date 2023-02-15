<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\User;

class LoginController extends Controller
{
    //

    public function customLogin(Request $request)
    {
        $request->validate([
            'card' => 'required',
            'password' => 'required',
        ]);



        // $credentials = $request->only('card', 'password');

       $user = User::where('card',$request->card)->first();

        if (Auth::attempt(['card' => $request->input('card'), 'password' => $request->input('password')])) {
            // The user is admin
            return redirect()->route('home')
            ->with('success','Login successfully');
            }

        // if (Auth::attempt($credentials)) {

        //     return redirect()->route('employee.index')
        //     ->with('success','Login successfully');
        // }

        return redirect()->back()->withErrors(['msg' => 'Oppes! You have entered invalid credentials.']);

      //  return redirect()->back()->withErrors(['msg' => 'Oppes! You have entered invalid credentials.']);

      //  return redirect("login")->withSuccess('Login details are not valid');
    }


    public function perform()
    {
        Auth::logout();
     //   return redirect('/admin/login');

        return redirect('/');
    }

}
