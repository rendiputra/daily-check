<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // dashboard user
    public function dashboard()
    {
        return view('dashboard');
    }

    //TODO: create form daily check
}
