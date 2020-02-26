<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'is_active' => 1,
            ],
            [
                'name' => 'User',
                'is_active' => 1,
            ],
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
