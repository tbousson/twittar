<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comment;
use App\Models\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            MessageSeeder::class,
            CommentSeeder::class,
            LikeSeeder::class,
        ]);
        $user = User::factory()
            ->count(50)
            ->has(Message::factory()->count(10))
            ->create();
       
       Comment::factory()->count(1000)->create();
       
    }
}
