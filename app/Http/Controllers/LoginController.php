<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $formFields = $request->only(['name', 'password']);

        if(Auth::attempt($formFields)){
            return redirect(route('welcome'));
        }
        DD($formFields);
    }
}
