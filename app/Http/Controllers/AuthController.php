<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  //
  public function index(Request $request) {
    if(Auth::check()) {
      return redirect()->route('home');
    }
    return view('login');
  }
  public function login_action(Request $request) {
    //dd($request);
    $validator = $request->validate([
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    if(Auth::attempt($validator)) {
      return redirect()->route('home');
    }
  }

  public function register(Request $request) {
    $isLoggedIn = Auth::check();
    if($isLoggedIn) {
      return redirect()->route('home');
    }
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

    $data['password'] = Hash::make($data['password']);
      
    User::create($data);
    
    return redirect(route('home'));    
  }

  public function logout() {
    Auth::logout();
    return redirect()->route('login');
  }
}
