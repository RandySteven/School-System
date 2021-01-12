<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect(['Matematika', 'Biologi', 'Fisika', 'Mandarin', 'Jepang', 'Inggris', 'Programming', 'Ekonomi', 'Akuntansi', 'Geografi', 'Sosiologi', 'Sejarah']);
        $categories->each(function ($c){
            Category::create([
                'category' => $c,
                'slug' => \Str::slug($c)
            ]);
        });
    }
}
