<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = collect(['IPA', 'IPS', 'Semua']);
        $majors->each(function ($c){
            Major::create([
                'major' => $c,
                'slug' => \Str::slug($c)
            ]);
        });
    }
}
