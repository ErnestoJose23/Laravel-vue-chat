<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function chat(){
        return view('chat');
    }

    /*
    public function send(request $request){
        $user = User::find(Auth::id());
        event(new ChatEvent($request->message, $user));
    }*/

    public function send(){
        $message = "hola";
        $user = User::find(Auth::id());
        event(new ChatEvent($message, $user));
    }
}
