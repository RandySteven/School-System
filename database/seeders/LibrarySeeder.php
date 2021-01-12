<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Library::create([
            'name' => 'Library',
            'slug' => \Str::slug('library'),
            'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde consequatur earum quaerat minima quibusdam deleniti ab modi? Quos veniam est sunt quia alias a aliquam vel, velit aliquid explicabo vero?'
        ]);
    }
}
