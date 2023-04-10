<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    public function index($id)
    {
        $children = Child::where('user_id', $id)->get();
         return response()->json($children);
    }

    public function store(Request $request,$id)
    {
        Child::create([
            'description' => $request->description,
            'user_id' => $id
        ]);

        return response()->json("Potomok vytvoreny");
    }


    public function destroy($id)
    {
        Child::where('user_id', $id)->delete();
        return response()->json("Potomkovia vymazany");
    }
}
