<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request){
        if (Auth::check()){
            $message = new Message;
            $message->message = $request->message;
            $message->user_id = Auth::id();
            $message->save();
        }
        
        return redirect(route('user.login'));
    }

    public function delete(Request $request){
        if (Message::find($request->id)->user->id == Auth::id())
            Message::find($request->id)->delete();
        
        return redirect(route('welcome'));
    }

}
