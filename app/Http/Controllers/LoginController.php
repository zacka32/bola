<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Session\CookieSessionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    function index(){
        return view('tampilan.admin.login');
    }
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'password Wajib Diisi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if(Auth::user()->role=='murabbi') {
                return redirect('/murabbi');
            } elseif (Auth::user()->role=='keptah'){
                return redirect('/keptah');
            } elseif (Auth::user()->role=='admin'){
                return redirect('/admin');
            }
            
        }else{
            return redirect('')->withErrors('Usrnmetdk sesuai')->withInput();
        }
        
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
    
}