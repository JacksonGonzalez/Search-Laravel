<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){
        $name   = $request->name;
        $email  = $request->email;
        $bio    = $request->bio;

        $users = User::orderBy('id', 'DESC')
        ->name($name)->email($email)->bio($bio)
        ->paginate(4);

        return view('users', compact('users'));
    }
}
