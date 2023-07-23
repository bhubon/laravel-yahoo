<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    public function showUsers() {
        // $users = DB::table('users')
        //             ->select('city')
        //             ->distinct()
        //             ->get();

        // $users = DB::table('users')->pluck('name','email');

        // $users = DB::table('users')
        //             ->where('city','Narsingdi')
        //             ->where('age','<>',15)
        //             ->get();

        // $users = DB::table('users')
        //             ->where('name','like','S%')
        //             ->get();

        // $users = DB::table('users')
        //             ->where([
        //                 ['city','Narsingdi'],
        //                 ['age','>',15]
        //             ])
        //             ->get();

        $users = DB::table('users')
            ->where('city', 'Narsingdi')
            ->orWhere('age', '>', 16)
            ->get();


        // $users = DB::table('users')->where('id',2)->get();
        // $users = DB::table('users')->find(2);

        // return $users;


        return view('allUsers', ['users' => $users]);
    }

    public function singleUser(string $id) {
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['user' => $user[0]]);
    }
}
