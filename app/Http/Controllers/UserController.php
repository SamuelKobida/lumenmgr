<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return response()->json("Používateľ vytvorený");
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return response()->json("Pouzivatel updatovany");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json("Pouzivatel vymazany");
    }



}
