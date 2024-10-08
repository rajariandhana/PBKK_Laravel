<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name'=>'Politics',
            'slug'=>'politics',
            'color'=>'red'
        ]);
        Category::create([
            'name'=>'Science',
            'slug'=>'science',
            'color'=>'green'
        ]);
        Category::create([
            'name'=>'Culinary',
            'slug'=>'culinary',
            'color'=>'blue'
        ]);
        Category::create([
            'name'=>'Intermezzo',
            'slug'=>'intermezzo',
            'color'=>'yellow'
        ]);
    }
}
