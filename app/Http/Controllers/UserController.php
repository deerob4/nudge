<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUsers()
    {
       /**
        * The number of users that should be returned.
        * @var integer
        */
       $paginateValue = 6;

       /**
        * The sexuality of the current user.
        * @var array<User>
        */
       $sexuality = Auth::user()->sexuality;

       /**
        * The gender of the current user.
        * @var array<User>
        */
       $gender = Auth::user()->gender;

       // Determine which users to show them.
       if ($sexuality == 'straight')
       {
           return DB::table('users')
                     ->where('sexuality', 'straight')
                     ->where('gender', '<>', $gender)
                     ->paginate(6);
       }
       elseif ($sexuality == 'gay')
       {
           return DB::table('users')
                     ->where('sexuality', 'gay')
                     ->paginate(6);
       }
       elseif ($sexuality == 'lesbian') 
       {
           return DB::table('users')
                     ->where('sexuality', 'lesbian')
                     ->paginate(6);
       }
    }
}
