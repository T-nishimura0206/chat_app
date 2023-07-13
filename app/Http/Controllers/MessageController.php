<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat_room_user;
use App\Models\chat_room;
use App\Models\message;

class MessageController extends Controller
{
    /**
     * 受信者の情報や過去のメッセージを取得
     */
    public function getChatRoom($chat) {
        
        // ログインしているユーザが所属しているチャットルームを取得
        $chatRooms = chat_room_user::where('user_id', \Auth::user()->id)->pluck('chat_room_id');

        $members = [];
        $receiver = '';
        $sender = '';
        $chatRoomId = '';
        
        foreach($chatRooms as $chatRoom) {
            // 同じチャットルームに所属する他のユーザーを取得
            $otherMembers = chat_room_user::where('chat_room_id', $chatRoom)->where('user_id', '!=', \Auth::user()->id)->first();
            $member = [];
            $member['chat_id'] = $otherMembers->chat_room_id;
            $member['user'] = User::where('id', $otherMembers->user_id)->first();

            // 最新のメッセージを表示
            $latestMessage = message::where('chat_room_id', $member['chat_id'])->latest('created_at')->first();
            if ($latestMessage) {
                $member['latest_message'] = $latestMessage;
            } else {
                $member['latest_message']['message'] = '';
            }
            
            $members[] = $member;
        }


        $messages = message::where('chat_room_id', $chat)->orderBy('created_at', 'asc')->get();

        // 同じチャットルームに所属する他のユーザーを取得
        $otherMembers = chat_room_user::where('chat_room_id', $chat)->where('user_id', '!=', \Auth::user()->id)->first();
        if ($otherMembers) {
            $receiver = User::where('id', $otherMembers->user_id)->first();
        } else {
            $receiver = null;
        }
        $sender = \Auth::user()->id;
        $chatRoomId = $chat;

        if (empty($messages)) {
            return view('home', compact('receiver', 'sender', 'chatRoomId', 'members'));
        } else {
            return view('home', compact('messages', 'receiver', 'sender', 'chatRoomId', 'members'));
        }
    }

    /**
     * メッセージを取得
     */
    public function getMessage($chat) {

        // $messages = message::where('chat_room_id', $chat)->orderBy('created_at', 'asc')->get();
        $messages = message::where('chat_room_id', $chat)->latest('created_at')->first();
        $messages->login_user_id = \Auth::user()->id;

        return response()->json(['messages' => $messages]);
    }

    /**
     * 最新メッセージを取得
     */
    // public function getMessage()
    // {
    //     $messages = Message::orderBy('created_at', 'asc')->get();

    //     return response()->json(['messages' => $messages]);
    // }

    /**
     * メッセージの保存
     */
    public function store(Request $request) {
        // バリデーションなどの処理を追加する場合はここで行います
        
        // メッセージを作成
        // if (!is_null($request->input('chat_room_id')) && !is_null($request->input('user_id')) && !is_null($request->input('message'))) {
        //     $message = new message();
        //     $message->chat_room_id = $request->input('chat_room_id');
        //     $message->user_id = $request->input('user_id');
        //     $message->message = $request->input('message');
        //     $message->save();
        // }

        // $validatedData = $request->validate([
        //     'message' => 'required|string',
        //     'chat_room_id' => 'required',
        //     'user_id' => 'required',
        // ]);
        
        // $message = Message::create([
        //     'message' => $request->message,
        //     'chat_room_id' => $request->chat_room_id,
        //     'user_id' => $request->user_id,
        // ]);

        // メッセージを作成
        if (!is_null($request->input('chat_room_id')) && !is_null($request->input('user_id')) && !is_null($request->input('message'))) {
            $message = new message();
            $message->chat_room_id = $request->input('chat_room_id');
            $message->user_id = $request->input('user_id');
            $message->message = $request->input('message');
            $message->save();
            $message->send_time = now()->format('H:i');
        }
        
        // メッセージの作成が完了した後にリダイレクトなどの処理を行います

        // return redirect()->back();

        // dd($request);

        // レスポンスを返す
        return response()->json(['message' => $message]);
    }

}
