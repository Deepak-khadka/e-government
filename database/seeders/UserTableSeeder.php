<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'super_admin',
            'email' => 'root@neputer.com',
            'password' => bcrypt('secret'),
            'verification_token' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
