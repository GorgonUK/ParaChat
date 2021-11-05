<?php
 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
*
*
     * @return void
     */
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
        $username = $input["username"];
        User::create(["name"=>$username]);
 
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
 
} 