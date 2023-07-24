<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    public function showUsers() {
        $users = DB::table('users')->get();

        return view('allUsers', ['users' => $users]);
    }

    public function singleUser(string $id) {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['user' => $user[0]]);
    }
}
