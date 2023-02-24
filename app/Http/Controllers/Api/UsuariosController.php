<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsuariosController extends Controller
{
    public function create(Request $data){

        $users =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return response()->json($users, 201);
    }

    public function listAll(){
        $users =  User::get();
        return response()->json($users);
    }

    public function list($id){
        $user =  User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id){
        $user =  User::find($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function delete($id){
        $user =  User::find($id);
        $user->delete($id);
        return response()->json(['message' => 'usuario deletado com sucesso']);
    }
}
