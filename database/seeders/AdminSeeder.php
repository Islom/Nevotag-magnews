<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

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
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('123'),
            'remember_token' => null,

        ]);

        Role::create([
            'name' => 'admin',
        ]);
        $admin->assignRole('admin');
    }
}
