<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::orderBy ('id' , 'desc')->paginate(10); //Query Data

        return view ('users.index' , [
            'users' => $users
        ]); //folder -> users/index.blade.php
    }
}
