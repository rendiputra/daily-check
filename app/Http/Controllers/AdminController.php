<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // TODO: create dashboard admin
    public function dashboard ()
    {
        dd(auth()->user());
    }
}
