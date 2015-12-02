<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
        return view('pages.profile', ['user' => User::findOrFail($id)]);
    }
}
