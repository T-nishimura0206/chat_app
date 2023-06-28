<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatMyProfileController extends Controller
{
    //
    public function index() {

        $my_profile = User::where('id', \Auth::user()->id)->first();

        return view('chat_my_profile');
    }
}
