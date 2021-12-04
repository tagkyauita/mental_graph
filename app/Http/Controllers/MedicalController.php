<?php

namespace App\Http\Controllers;

use App\Medical;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('medical.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() == $user->id){
            return view('medical.edit', compact('user'));
        }
    }
}
