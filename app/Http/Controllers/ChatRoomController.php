<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat_room_user;
use App\Models\chat_room;
use App\Models\message;

class ChatRoomController extends Controller
{
    //
    /**
     * チャットルーム一覧を表示する
     */
    public function index()
    {
        // ログインしているユーザがメンバーであるチャットルームを取得
        $chatRooms = chat_room_user::where('user_id', \Auth::user()->id)->pluck('chat_room_id');

        $members = [];
        
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

        return view('chat_rooms', compact('members'));
    }

    // /**
    //  * 新しいチャットルームの作成フォームを表示する
    //  */
    // public function create()
    // {
    //     return view('chat_rooms.create');
    // }

    // /**
    //  * チャットルームを作成する
    //  */
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $chatRoom = ChatRoom::create($validatedData);

    //     return redirect()->route('chat_rooms.show', $chatRoom);
    // }

    // /**
    //  * 特定のチャットルームの詳細を表示する
    //  */
    // public function show(ChatRoom $chatRoom)
    // {
    //     return view('chat_rooms.show', compact('chatRoom'));
    // }

    // /**
    //  * チャットルームの編集フォームを表示する
    //  */
    // public function edit(ChatRoom $chatRoom)
    // {
    //     return view('chat_rooms.edit', compact('chatRoom'));
    // }

    // /**
    //  * チャットルームを更新する
    //  */
    // public function update(Request $request, ChatRoom $chatRoom)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $chatRoom->update($validatedData);

    //     return redirect()->route('chat_rooms.show', $chatRoom);
    // }

    // /**
    //  * チャットルームを削除する
    //  */
    // public function destroy(ChatRoom $chatRoom)
    // {
    //     $chatRoom->delete();

    //     return redirect()->route('chat_rooms.index');
    // }
}
