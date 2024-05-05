<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function welcome(){
        return view('login');
    }
    public function login(Request $request){
        // dd($request);
        if(Auth::attempt(['nisn' => $request->nisn, 'password' => $request->tanggal_lahir])){
            if(Auth::user()->user_type == 1){
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type == 0){
                return redirect('user/dashboard');
            }
        }else{
            return redirect()->back()->with('error', 'Nisn atau Tanggal lahir salah');
        }
    }
    public function Logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
