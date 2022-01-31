<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //dashboard
    public function showDashboard()
    {
        return view('user.dashboard');
    }
}
