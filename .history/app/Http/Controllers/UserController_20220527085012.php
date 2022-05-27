<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleType;
use Illuminate\Http\Request;
use App\Models\RolePermissions;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        $permissions = RolePermissions::all();
        $role_types = RoleType::all();

        $data = [
            'users' => $users,
            'permissions' => $permissions,
            'role_types' => $role_types
        ];

        return view('pages.dashboard', $data);     
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
