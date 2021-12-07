<?php

namespace App\Http\Controllers;

use App\Karte;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KartenController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $karten = Karte::all();

        return view('karten.show', compact('user', 'karten'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() == $user->id){
            return view('karten.edit', compact('user'));
        }
    }
}
