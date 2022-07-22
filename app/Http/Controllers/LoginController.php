<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect(route('welcome'));
        }
        return view('login');
    }

    public function postLogin(Request $request){
        $formFields = $request->only(['name', 'password']);

        if(Auth::attempt($formFields)){
            return redirect(route('welcome'));
        }
        return redirect(route('user.login'))->withErrors([
            'authError' => 'Неправильный логин или пароль'
        ]);
    }
    
    public function logout(){
        Auth::logout();
        return redirect(route('welcome'));
    }

}
