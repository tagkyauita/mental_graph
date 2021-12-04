<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show')->with('user', $user);
    }
}
