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
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        // if(!$_SESSION["hasUsername"])
        $input = $request->all();
        $username = $input["username"];
        User::create(["name"=>$username]);
        $request->session()->put('hasUsername', true);
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
 
} 