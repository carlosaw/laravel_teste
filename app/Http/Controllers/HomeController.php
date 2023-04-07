<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request) {
        $AuthUser = Auth::user();

        return view('home', ['AuthUser' => $AuthUser]);
    }
}
