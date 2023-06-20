<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat_room_user;
use App\Models\chat_room;
use App\Models\message;


class ChatController extends Controller
{
    //
    public function index($chat) {

        // $sender = message::where('chat_room_id', $chat)->get();
        // $reciver = message::where('chat_room_id', $chat)->get();
        $messages = message::where('chat_room_id', $chat)->get();
        // dd($message);
        // 同じチャットルームに所属する他のユーザーを取得
        $otherMembers = chat_room_user::where('chat_room_id', $chat)->where('user_id', '!=', \Auth::user()->id)->first();
        $receiver = User::where('id', $otherMembers->user_id)->first();
        $sender = \Auth::user()->id;
        $chatRoomId = $chat;

        // 一分以内に送られたメッセージは時間を表示せず、重ねて表示させる
        
        if (empty($messages)) {
            return view('chat/chat', compact('receiver', 'sender', 'chatRoomId'));
        } else {
            return view('chat/chat', compact('messages', 'receiver', 'sender', 'chatRoomId'));
        }
    }

    // /**
    //  * メッセージを送信する
    //  */
    // public function store(Request $request, ChatRoom $chatRoom)
    // {
    //     $validatedData = $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'message' => 'required|string|max:255',
    //     ]);

    //     $message = new Message([
    //         'user_id' => $validatedData['user_id'],
    //         'message' => $validatedData['message'],
    //     ]);

    //     $chatRoom->messages()->save($message);

    //     return redirect()->route('chat_rooms.show', $chatRoom);
    // }

    // /**
    //  * メッセージを削除する
    //  */
    // public function destroy(ChatRoom $chatRoom, Message $message)
    // {
    //     $message->delete();

    //     return redirect()->route('chat_rooms.show', $chatRoom);
    // }
}
