<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //show register
    public function showRegister(){
        return view('user.register');
    }
    //save register
    public function saveRegister(){
        $this->validate(request(),[
            'name' => 'required|min:4',
            'username' =>'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        return redirect()->route('show.login')->with('registerOk', 'Register successfully!');
    }
    //login show
    public function showLogin(){
        return view('user.login');
    }
    //login
    public function login()
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'username' => request('username'),
            'password' => request('password')
        ])){
            return redirect()->route('show.dashboard');
        }else{
            return redirect()->back()->with('loginError', 'Credentials password does not match!');
        }
    }


    //logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }
}
