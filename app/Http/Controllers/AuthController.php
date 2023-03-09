<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(Request $request) {
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }
}
