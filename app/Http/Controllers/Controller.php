<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $allMessages = \App\Models\Message::paginate(20);
        if (!isset($_GET['page']))
            return redirect('/?page=' . $allMessages->lastPage());
        if (!is_numeric($_GET['page']))
            return redirect('/?page=' . $allMessages->lastPage());
        return view('welcome', compact('allMessages'));
    }
}
