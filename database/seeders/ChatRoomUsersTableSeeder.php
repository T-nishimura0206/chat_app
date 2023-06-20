<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ChatRoomUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('chat_room_users')->insert([
            [   
                'chat_room_id' => '1',
                'user_id' => '1',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '2',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '1',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '3',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '1',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '4',
            ],
        ]);
    }
}
