<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  //
  public function index(Request $request) {
    return view('login');
  }
  public function login_action(Request $request) {
    //dd($request);
    $validator = $request->validate([
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);
    //dd($validator);
  }

  public function register(Request $request) {
    return view('register');
  }

  public function register_action(Request $request) {
    //dd($request);
    /*
    ************************************
    Regras para registro
    - O usuário tem que ter um nome
    - O Email tem que ser único na tabela users
    - Todos os campos são REQUIRED 
    - Password tem que ter no mínimo 6 caracteres   
    */
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
    ]);
      
    $data = $request->only('name', 'email', 'password');
      
    User::create($data);

    return redirect(route('login'));
  }
}
