<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Level;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++)
        {
            $user = User::create([
                'name' => "test_user_{$i}",
                'email' => "test_{$i}@gmail.com",
                'password' => Hash::make("test_password_{$i}"),
            ]);
            $level = new Level;
            $user->level()->save($level);
        }
    }
}
