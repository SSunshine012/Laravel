<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view(){
        return view('login');
    }
    public function login_process(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            ]);
    
            $data = $request->all();
            // use Illuminate\Support\Facades\Auth;
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                return Redirect::to('form');
            }else{
                return Redirect::to('login');
            }
    }
    public function logout_process(){

        Auth::logout();
        return Redirect::to('login');
    }
    public function register_view(){
        return view('register');
    }
    function register_process(Request $req){
        $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        ]);

        $data = $req->all();

        User::create($data);

        return Redirect::to('login');
    }
}
