<?php

namespace Database\Seeders;

use App\Providers\AppServiceProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        User::create([
            'name'      => 'Tiggaz Goat',
            'email'     => 'tiggaz@pingdevs.com',
            'password'  => bcrypt('temp1234'),
            'role_id'   => 1
        ]);
    }
}
