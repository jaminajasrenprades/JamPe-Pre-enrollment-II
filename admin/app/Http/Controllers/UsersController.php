<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Users;
class UsersController extends Controller
{
    //
    public function index() {
    		$user = DB::table('users')->get();
	//$userss = User::all();
	//$users= Users::all();

	return view ('users.index', compact('user'));
    }

    public function show($user){
    	//	$user = DB::table('users')->where('username', '=', $user);
 	$user = Users::find($user);
      //  $users = Users::all();
      //  $stu = $users::find($user);
        //return $user;
	//dd($user);

	return view('users.show', compact('user'));
    }

}
