<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        $validateFields = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('welcome'));
        }

        return redirect(route('registration'));

    }

    
}
