<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::all()->toArray();
        return array_reverse($Users);      
    }
    public function store(Request $request)
    {
        $User = new User([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $User->save();
        return response()->json('User created!');
    }
    public function show($id)
    {
        $User = User::find($id);
        return response()->json($User);
    }
    public function update($id, Request $request)
    {
        $User = User::find($id);
        $User->update($request->all());
        return response()->json('User updated!');
    }
    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
        return response()->json('User deleted!');
    }
}
