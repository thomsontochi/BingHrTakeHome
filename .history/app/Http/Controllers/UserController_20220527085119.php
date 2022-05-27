<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleType;
use Illuminate\Http\Request;
use App\Models\RolePermissions;
use App\Models\UserPermissions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        try {

            $validation = Validator::make($request->all(), [
                'employee_id' => 'required|unique:users',
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|unique:users',
                'role_type_id' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password'
            ]);

            if (!$validation->fails()) {

                $user = new User();
                $user->employee_id = $request->employee_id;
                $user->username = $request->username;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->email = $request->email;
                $user->mobile_number = $request->mobile_number;
                $user->password = Hash::make($request->password);
                $user->role_type_id = $request->role_type_id;

                $user->save();

                $index = 0;
                foreach ($request->permissions as $permission) {

                    $userPermission = new UserPermissions();
                    $userPermission->user_id = $user->id;
                    $userPermission->permission_id = $permission;
                    $userPermission->read_mode = isset($request?->permission_read[$index]) ? 1 : 0;
                    $userPermission->write_mode = isset($request?->permission_write[$index]) ? 1 : 0;
                    $userPermission->delete_mode = isset($request?->permission_delete[$index]) ? 1 : 0;

                    $userPermission->save();

                    $index++;
                }

                $response = [
                    "status" => 200,
                    "success" => true,
                    "message" => "User has been created successfully!",
                    "user" => UserResource::make($user)
                ];
            } else {
                $response = [
                    "status" => 200,
                    "success" => false,
                    "error" => [
                        "message" => "All required fields must be filled correctly!"
                    ],
                    "errors" => $validation->errors()
                ];
            }
        } catch (\Exception $ex) {

            $response = [
                "status" => 500,
                "success" => false,
                "error" => [
                    "message" => "Error occured: Unable to create user"
                ]
            ];
        }

        return response()->json($response, $response['status']);
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
