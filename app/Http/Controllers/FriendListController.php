<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendListController extends Controller
{
    //
    public function index() {
        
        return view('friends');
    }
}
