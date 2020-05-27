<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request)
    {
        if(Auth::attempt([
            'email' =>$request->email,
            'password' => $request->password,
            'status' => 1,
        ]))
        {
            $user = User::where('email',$request->email)->first();
            
            // if($user == null){
            //     return redirect()->back();

            // }
                if($user->is_admin == true){
                    return redirect()->route('dashboard');
                }
                    return redirect()->route('home');
        }else{
       return redirect()->route('login')->with('error','Email and password are wrong');
    }
    }
}
