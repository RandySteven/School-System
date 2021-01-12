<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = collect(['1', '2', '3']);
        $levels->each(function ($c){
            Level::create([
                'level' => $c,
                'slug' => \Str::slug($c)
            ]);
        });
    }
}
