<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaodeobraController extends Controller
{
    //
    public function index(Request $request) {
        return view('maodeobras/index');
    }

    public $timestamps = false;
}
