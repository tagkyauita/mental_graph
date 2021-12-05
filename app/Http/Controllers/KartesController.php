<?php

namespace App\Http\Controllers;

use App\Karte;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KartesController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('kartes.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() == $user->id){
            return view('kartes.edit', compact('user'));
        }
    }
}
