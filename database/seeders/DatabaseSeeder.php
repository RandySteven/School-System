<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Level;
use App\Models\Library;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CategorySeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(LevelSeeder::class);
        // $this->call(MajorSeeder::class);
        // $this->call(LibrarySeeder::class);
        $this->call(DegreeSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
