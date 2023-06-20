<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [   
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => Hash::make('aaaaaaaa'),
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'name' => 'test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('bbbbbbbb'),
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'name' => 'test3',
                'email' => 'test3@test.com',
                'password' => Hash::make('cccccccc'),
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'name' => 'test4',
                'email' => 'test4@test.com',
                'password' => Hash::make('dddddddd'),
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

            [   
                'name' => 'test5',
                'email' => 'test5@test.com',
                'password' => Hash::make('eeeeeeee'),
                'created_at' => '2023-06-19 16:32:37',
                'updated_at' => '2023-06-19 16:32:37',
            ],

        ]);
    }
}
