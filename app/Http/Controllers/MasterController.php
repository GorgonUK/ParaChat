<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chatroom()
    {
        return view('chat');
    }
    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        \Log::info($input);
 
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}