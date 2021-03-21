<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'likable_id' => 1,
            'likable_type' => "App\Comment",
            'user_id' => 1
        ]);
        DB::table('likes')->insert([
            'likable_id' => 1,
            'likable_type' => "App\Message",
            'user_id' => 1
        ]);
    }
}
