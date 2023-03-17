<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        $users = User::all();
        $data = ["users" => $users, "roles" => $roles];
        return view('dashboard.users.index')->with($data);
    }

    public function create()
    {

        $roles = Role::all();
        $data = ['roles' => $roles];
        return view('dashboard.users.create')->with($data);
    }

    public function store(Request $request)
    {

        $name = $request->get('name');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));
        $role_id = $request->get('role_id');

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "role_id" => $role_id
        ]);

        return redirect()->route('users.index');

    }

    public function show($id)
    {
        $user = User::FindOrFail($id);
        $data = ['user' => $user];
        return view('dashboard.users.show')->with($data);

    }

    public function edit($id)
    {
        $user = User::FindOrFail($id);
        $roles = Role::all();

        $data = ['user => $user', 'roles' => $roles];

        return view('users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $user = User::FindOrFail($id);

        $user->fill($request->all())->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
