<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('index', [
            'users_list' => $users
        ]);
    }
}
