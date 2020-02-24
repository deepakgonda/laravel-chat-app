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
                'is_active' => 'true',
            ],
            [
                'name' => 'User',
                'is_active' => 'true',
            ],
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
