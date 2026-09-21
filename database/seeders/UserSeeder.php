<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ana Silva',
                'phone' => '11988887777',
                'address' => [
                    'number' => 123,
                    'street' => 'Rua das Flores',
                ],
            ],
            [
                'name' => 'Bruno Costa',
                'phone' => '11977776666',
                'address' => [
                    'number' => 456,
                    'street' => 'Avenida Paulista',
                ],
            ],
            [
                'name' => 'Carla Mendes',
                'phone' => '11966665555',
                'address' => [
                    'number' => 789,
                    'street' => 'Rua do Portal',
                ],
            ],
            [
                'name' => 'Diego Rocha',
                'phone' => '11955554444',
                'address' => [
                    'number' => 321,
                    'street' => 'Travessa dos Pássaros',
                ],
            ],
            [
                'name' => 'Elaine Souza',
                'phone' => '11944443333',
                'address' => [
                    'number' => 654,
                    'street' => 'Alameda das Palmeiras',
                ],
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'phone' => $userData['phone'],
            ]);

            $user->address()->create([
                'number' => $userData['address']['number'],
                'street' => $userData['address']['street'],
            ]);
        }
    }
}
