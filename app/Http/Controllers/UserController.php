<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::select('id', 'first_name', 'last_name', 'phone')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function view(User $user)
    {
        return view('users.view', compact('user'));
    }
}
