<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'id' => 100,
                'name' => 'Admin I Strator',
                'email' => 'admin@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['admin',],
            ],

            [
                'id' => 200,
                'name' => 'Staff User',
                'email' => 'staff@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['staff',],
            ],

            [
                'id' => 201,
                'name' => 'Client User',
                'email' => 'client@example.com',
                'password' => 'Password1',
                'email_verified_at' => null,
                'roles' => ['client',],
            ],
        ];

        foreach ($seedUsers as $newUser) {

            // grab the roles from the seed users
            $roles = $newUser['roles'];
            unset($newUser['roles']);

            $user = User::updateOrCreate(
                ['id' => $newUser['id']],
                $newUser
            );

            // Uncomment this line when using Spatie Permissions
            // $user->assignRole($roles);

        }

        // Uncomment the line below to create (10) randomly named users using the User Factory.
        // User::factory(10)->create();


    }
}
