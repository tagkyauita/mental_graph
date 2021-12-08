<?php

namespace App\Http\Controllers;

use App\Karte;
use App\User;
use App\Discription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\DiscriptionRequest;

class DiscriptionController extends Controller
{

    public function create($id)
    {
        $karten = Karte::all();

        return view('discriptions.create', compact('karten'));
    }

    public function store(DiscriptionRequest $request, $id)
    {
        $discription = new Discription;

        $discription->karte_id = $request->medicine_id;
        $discription->discription = $request->discription;
        $discription->save();

        return redirect()->route('karten.show', Auth::id());
    }

    public function edit($id)
    {
        $karten = Karte::all();

        return view('discriptions.edit', compact('karten'));
    }

    public function update(Request $request, $id)
    {
        $discription = Discription::findOrFail($request->medicine_id);

        $discription->karte_id = $request->medicine_id;
        $discription->discription = $request->discription;
        $discription->save();

        return redirect()->route('karten.show', Auth::id());
    }
}
