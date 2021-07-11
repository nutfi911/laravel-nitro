<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nutfi Ayhan',
            'email' => 'nutfi911@icloud.com',
            'password' => Hash::make('000000'),
            'remember_token' => Str::random(10),
            'user_phone' => '0888530123',
            'user_birthyear' => '1999',
            'isActive' => 1,
            'isAdmin' => 1,
        ]);

        User::create([
            'name' => 'Inci Cenap',
            'email' => 'inci_fikri@abv.bg',
            'password' => Hash::make('000000'),
            'remember_token' => Str::random(10),
            'user_phone' => '0883160123',
            'user_birthyear' => '1997',
            'isActive' => 1,
            'isAdmin' => 0,
        ]);
    }
}
