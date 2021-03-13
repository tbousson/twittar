<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Thomas Bousson',
            'displayName' => '@thomas',
            'role_id' => 1,
            'email' => 'thomas.bousson86@gmail.com',
            'password' => Hash::make('Azerty**01')
        ]);
    }
}
