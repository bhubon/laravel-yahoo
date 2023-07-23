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

        // $users = DB::table('users')
        //     ->whereBetween('id', [3,6])
        //     ->get();

        // $users = DB::table('users')
        //     ->whereNotBetween('id', [3,6])
        //     ->get();

        // $users = DB::table('users')
        //     ->whereIn('id', [3, 5, 7])
        //     ->get();

        // $users = DB::table('users')
        //     ->whereNotIn('city', ['Dhaka','Sylhet'])
        //     ->get();

        // $users = DB::table('users')
        //     ->where('name','like','l%')
        //     ->orWhereNotIn('city', ['Dhaka', 'Sylhet'])
        //     ->get();



        // $users = DB::table('users')
        //     ->whereNull('email')
        //     ->get();


        // =========== data time

        // $users = DB::table('users')
        //     ->whereDate('created_at','2023-07-23')
        //     ->get();


        // $users = DB::table('users')
        //     ->whereMonth('created_at','07')
        //     ->get();


        // $users = DB::table('users')
        //     ->whereDay('created_at','17')
        //     ->get();


        // $users = DB::table('users')
        //     ->whereYear('created_at','2023')
        //     ->get();


        // $users = DB::table('users')
        //     ->whereTime('created_at', '14:39:52')
        //     ->get();


        // ========= order

        // $users = DB::table('users')
        //     ->orderBy('age','DESC')
        //     ->get();





        // ============

        // $users = DB::table('users')->first();
        // $users = DB::table('users')->latest()->first();
        // $users = DB::table('users')->oldest()->first();
        // $users = DB::table('users')->inRandomOrder()->first();


        // $users = DB::table('users')->limit(3)->offset(5)->get();
        // $users = DB::table('users')->take(3)->skip(5)->get();

        // $users = DB::table('users')->count();
        // $users = DB::table('users')->max('age');
        // $users = DB::table('users')->min('age');
        $users = DB::table('users')->sum('age');

        return $users;






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
