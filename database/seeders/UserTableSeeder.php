<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Han Hyo Joo',
            'email' => 'hanhyojoo@cinemify.com',
            'password' => bcrypt('abc123')
        ]);

        $admin->assignRole('admin');

    }
}
