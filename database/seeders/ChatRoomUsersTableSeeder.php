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
                'chat_room_id' => '4',
                'user_id' => '4',
            ],

            [   
                'chat_room_id' => '4',
                'user_id' => '14',
            ],

            [   
                'chat_room_id' => '14',
                'user_id' => '4',
            ],

            [   
                'chat_room_id' => '14',
                'user_id' => '24',
            ],

            [   
                'chat_room_id' => '24',
                'user_id' => '4',
            ],

            [   
                'chat_room_id' => '24',
                'user_id' => '34',
            ],
        ]);
    }
}
