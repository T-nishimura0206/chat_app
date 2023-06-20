<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat_room_user;
use App\Models\chat_room;
use App\Models\message;

class MessageController extends Controller
{
    //
    public function store(Request $request) {
        // バリデーションなどの処理を追加する場合はここで行います
        
        // メッセージを作成
        $message = new message();
        $message->chat_room_id = $request->input('chat_room_id');
        $message->user_id = $request->input('user_id');
        $message->message = $request->input('message');
        $message->save();

        // メッセージの作成が完了した後にリダイレクトなどの処理を行います
        return redirect()->back();
    }

}
