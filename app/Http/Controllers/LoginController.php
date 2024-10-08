<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('Login.index',[
            
        ]);
    }
    public function authenticate(Request $request){
        $crendentials = $request->validate([
            'email'=>'required|email',
            'password'=> "required"
        ]);
        if(Auth::attempt($crendentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('LoginError','Login Account Failed,Please Try Again!!!');
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
