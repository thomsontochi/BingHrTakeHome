<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $s = ::all()->toArray();
        return array_reverse($s);      
    }
    public function store(Request $request)
    {
        $ = new ([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $->save();
        return response()->json(' created!');
    }
    public function show($id)
    {
        $ = ::find($id);
        return response()->json($);
    }
    public function update($id, Request $request)
    {
        $ = ::find($id);
        $->update($request->all());
        return response()->json(' updated!');
    }
    public function destroy($id)
    {
        $ = ::find($id);
        $->delete();
        return response()->json(' deleted!');
    }
}
