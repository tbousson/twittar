<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'content' => 'This is a test message',
            'user_id' => 1
        ]);
        DB::table('messages')->insert([
            'content' => 'This is a another message',
            'user_id' => 1
        ]);
        DB::table('messages')->insert([
            'content' => 'This is a third message',
            'user_id' => 1
        ]);
        DB::table('messages')->insert([
            'content' => 'This is a fourth message',
            'user_id' => 1
        ]);
        DB::table('messages')->insert([
            'content' => 'This is a blbal message',
            'user_id' => 1
        ]);
    }
}
