<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ChatRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('chat_rooms')->insert([
            [   
                'name' => 'room1',
            ],
            [   
                'name' => 'room2',
            ],
            [   
                'name' => 'room3',
            ],
            [   
                'name' => 'room4',
            ],
            [   
                'name' => 'room5',
            ],
        ]);
    }
}
