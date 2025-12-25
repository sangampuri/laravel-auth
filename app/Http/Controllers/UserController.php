<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|confirmed',
        ]);

        User::create($data);
        if($data){
            return redirect('/login');
        }

    }

    public function login(Request $request)
    {
         $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        else{
            return redirect('/login');
        }
    }
}
