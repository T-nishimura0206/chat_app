<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatProfileController extends Controller
{
    //
    public function index() {

        // $profile = User::where('id', \Auth::user()->id)->first();

        return view('chat_profile');
    }
}
