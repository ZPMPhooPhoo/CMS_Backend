<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'phoo phoo',
            'email' => 'phoophoo@gmail.com',
            'password' => Hash::make('12345678')
        ]
        );

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('12345678')
        ]
        );

        $admin->assignRole('SuperAdmin');
        $editor->assignRole('Editor');
    }
}
