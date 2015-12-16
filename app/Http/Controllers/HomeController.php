<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('pages.home');
    }

    public function showTerms()
    {
        return view('pages.terms');
    }
}
