<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(Request $r) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r) {
        $user = User::find($r->id);
        return $user;
    }

    // Inserir novo usuário
    public function insert(Request $r) {

        $name = $r->input('name');
        $email = $r->input('email');
        $password = $r->input('password');

        $rawData = $r->only(['name', 'email', 'password']);
        $newUser = User::create($rawData); 

        return $newUser;        
    }

    public function update($id, Request $request) {
        $array = ['error' => ''];

        // Validando
        $rules = [
            'name' => 'min:3',
            'email' => 'email|unique:users,email',
            'password' => 'min:3'
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            $failed = $validator->failed();
            return $array;
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // Atualizando o item
        $user = User::find($id);
        if($user) {
            if($name) {
                $user->name = $name;
            }

            if($email) {
                $user->email = $email;
            }
            if($password) {
                $user->password = $password;
            }

            $user->save();
            
        } else {
            $array['error'] = 'Usuário não existe!';
        }

        return $array;
    }
}
