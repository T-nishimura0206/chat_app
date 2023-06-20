<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('messages')->insert([
            [   
                'chat_room_id' => '1',
                'user_id' => '1',
                'message' => 'こんにちは！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '1',
                'message' => '初めまして！test1です！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '1',
                'message' => 'お名前をおしえてください。',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '2',
                'message' => 'はじめまして！ test2と申します！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '1',
                'message' => 'よろしくお願いします！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '1',
                'user_id' => '1',
                'message' => 'test2さんよろしくお願いします！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '3',
                'message' => 'こんにちは！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '3',
                'message' => '初めまして！test3です！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '3',
                'message' => 'お名前をおしえてください。',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '1',
                'message' => 'はじめまして！ test1と申します！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '1',
                'message' => 'よろしくお願いします！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '2',
                'user_id' => '3',
                'message' => 'test1さんよろしくお願いします！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '4',
                'message' => 'しりとりをしましょう！',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '4',
                'message' => 'しりとり',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '1',
                'message' => 'リンゴ',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '4',
                'message' => 'ゴリラ',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],
            [   
                'chat_room_id' => '3',
                'user_id' => '1',
                'message' => 'ラクダ',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'chat_room_id' => '3',
                'user_id' => '4',
                'message' => 'ダイヤモンド',
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],
        ]);
    }
}
