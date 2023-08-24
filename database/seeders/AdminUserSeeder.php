<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Administrator',
        //     'email' => 'adminisadmin@gmail.com',
        //     'password' => bcrypt('passwordisvalid'),
        // ]);

        User::create([
            'name' => 'DendiRiki',
            'email' => 'dendirikirahmawan@gmail.com',
            'password' => bcrypt('passwordisvalid'),
        ]);
    }
}
