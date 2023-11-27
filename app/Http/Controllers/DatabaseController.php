<?php

namespace App\Http\Controllers;

use App\Models\User;

class DatabaseController extends Controller {

    public $columns = ['id', 'name'];

    function show(?int $id = null) {

        $userData = $id > 0 ? [User::select($this->columns)->find($id)] : User::select('id', 'name')->get();

        return view('users', ['data' => ['columns' => $this->columns, 'userData' => $userData]]);
    }
}
