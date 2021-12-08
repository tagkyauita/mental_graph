<?php

namespace App\Http\Controllers;

use App\Karte;
use App\User;
use App\Discription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\KartenRequest;

class KartenController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        // ↓Whereでアカウントを絞って取得しないとダメです
        $karten = Karte::all();
        $discription = Discription::all();

        return view('karten.show', compact('user', 'karten', 'discription'));
    }

    public function create($id)
    {
        $user = User::findOrFail($id);
        return view('karten.create', compact('user'));
    }

    public function store(KartenRequest $request, $id)
    {
        $medicine = new Karte();

        $medicine->user_id = $id;
        $medicine->medicine = $request->medicine;
        $medicine->save();

        return redirect()->route('karten.show' ,$id);
    }

    public function discriptionedit($id)
    {
        return view('karten.discription_edit');
    }

    public function edit($id)
    {
        $karte = Karte::findOrFail($id);
        
        return view('karten.edit', compact('karte'));
    }

    public function update(Request $request, $id)
    {
        $medicine = Karte::findOrFail($id);

        $medicine->medicine = $request->medicine;
        $medicine->save();

        return redirect()->route('karten.show', Auth::id());
    }

    public function destroy($id)
    {
        $karte = Karte::findOrFail($id);

        $karte->delete();

        return redirect()->route('karten.show', $id);
    }
}
