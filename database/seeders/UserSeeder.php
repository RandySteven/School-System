<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Randy Steven',
            'email' => 'randysteven12@gmail.com',
            'password' => bcrypt('ganteng2001'),
        ]);
        $user->assignRole('admin');
    }
}
