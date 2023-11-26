<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    function login(Request $req) {

        $req->validate([
            'username' => 'required',
            'password' => 'required|min: 8',
        ]);

        $data = $req->input();
        $req->session()->put('username', $data['username']);

        return redirect('/user' . '/' . $data['username']);
    }
}
