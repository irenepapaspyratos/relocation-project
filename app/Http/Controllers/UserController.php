<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    function login(Request $req) {

        $req->validate([
            'username' => 'required',
            'password' => 'required|min: 8',
        ]);

        $data = $req->input();
        $req->session()->put('username', $data['username']);

        return redirect("/user/{$data['username']}");
    }

    function register(Request $req) {

        $req->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min: 8',
        ]);

        $user = new User;
        $user->role = 'user';
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;

        $req->session()->put('username', $req->username);
        $user->save();

        return redirect("/user/{$req->username}");
    }
}
