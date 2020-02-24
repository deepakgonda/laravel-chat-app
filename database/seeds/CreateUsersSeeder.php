<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@tech.local',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@tech.local',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            $user = User::create($value);
            if ($user->email == 'admin@tech.local') {
                $user->roles()->attach([1]);
            } else {
                $user->roles()->attach([2]);
            }
        }
    }
}
