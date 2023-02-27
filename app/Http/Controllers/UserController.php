<?php

namespace App\Http\Controllers;

use Database\Seeders\CountriesSeeder;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        $data = ['users' => $users];
        return view('dashboard.users.index')->with($data);
    }

    public function create()
    {
        $roles = Role::all();
        $countries = CountriesSeeder::
    }
}
