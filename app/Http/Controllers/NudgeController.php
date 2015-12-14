<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Mail;
use App\Nudge;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NudgeController extends Controller
{
    /**
     * Return all the user's nudges.
     * @return JSON The user's nudges.
     */
    public function getNudges()
    {
        return Auth::user()->nudges;
    }
    
    /**
     * Create a new nudge in the database and send an email.
     * @return The user's nuges.
     */
    public function createNudge(Request $request, $receiver_id)
    {
        Nudge::create([
            'sender_id' => Auth::user()->id,
            'receiver_id' => $receiver_id
        ]);
      
        $facebook_url = User::find($receiver_id)->facebook_url;
      
        Mail::send('emails.new_nudge', ['user' => Auth::User()])

        return Auth::user()->nudges;
    }
}

