<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function login_post(Request $request)
    {
        $email = $request->input('email_login');
        $password = $request->input('password_login');
        $data = DB::select('select * from users where email = ?', [$email]);
        if (count($data) > 0) {
            if ($data[0]->password == $password) {
                $data2 = DB::select('select * from city');
                return redirect()->route('home.home')->with(['data_citys' => $data2]);
            } else {
                return redirect()->route('home.login')->with(['error_login_password' => 'Password incorrect', 'email_login' => $email]);
            }
        } else {
            return redirect()->route('home.login')->with(['error_login_email' => 'email incorrect', 'email_login' => $email]);
        }
    }
    public function register_post(Request $request)
    {
        $FirstName = $request->input('FirstName');
        $LastName = $request->input('lastName');
        $emailRegister = $request->input('EmailRegister');
        $passwordRegister = $request->input('PasswordRegister');
        // $ConfirmePassword = $request->input('ConfirmePassword');
        $data = DB::select('select * from users where email = ?', [$emailRegister]);
        if (count($data) > 0) {
            return redirect()->route('home.register')->with(
                [
                    'errorMessege' => 'This Email is Already have'
                ]
            );
        } else {
            DB::insert('insert into users (Name,User_Name,email,password) values (?, ?,?,?)', [$FirstName, $LastName, $emailRegister, $passwordRegister]);
            return redirect()->route('home.login');
        }
    }
}
