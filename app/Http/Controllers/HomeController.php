<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat_room_user;
use App\Models\chat_room;
use App\Models\message;

class HomeController extends Controller
{
    /**
     * チャットルームを取得
     */
    public function index()
    {
        // ログインしているユーザがメンバーであるチャットルームを取得
        $chatRooms = chat_room_user::where('user_id', \Auth::user()->id)->pluck('chat_room_id');

        $members = [];
        $receiver = '';
        
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

        return view('home', compact('members', 'receiver'));
    }
}
