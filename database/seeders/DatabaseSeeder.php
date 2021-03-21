<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::factory()
            ->count(50)
            ->hasMessages(2)
            ->create();
    }
}
