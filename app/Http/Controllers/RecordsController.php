<?php

namespace App\Http\Controllers;

use App\Record;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('records.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() == $user->id){
            return view('records.edit', compact('user'));
        }
    }
}
