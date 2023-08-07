<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datauser = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Pemilik kos 1',
                'email' => 'pemilik1@example.com',
                'role' => 'pemilik',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Pemilik kos 2',
                'email' => 'pemilik2@example.com',
                'role' => 'pemilik',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Pencari kos',
                'email' => 'pencari@example.com',
                'role' => 'pencari',
                'password' => bcrypt('12345')
            ],
        ];

        foreach ($datauser as $data) {
            User::create($data);
        }
    }
}
