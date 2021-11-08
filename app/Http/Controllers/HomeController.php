<?php
 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

    }
    public function ajaxRequestPost(Request $request)
    {
        // if(!$_SESSION["hasUsername"])
        $input = $request->all();
        $username = $input["username"];
       
        $user_agent = request()->server('HTTP_USER_AGENT');
        User::create(["name"=>$username,"user_agent"=>$user_agent,"session",session_id()]);
        $request->session()->put('hasUsername', true);
        return response()->json(['success'=>'User logged in']);
    }
 
} 