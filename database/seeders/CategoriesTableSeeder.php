<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name'          => 'Uncategorized',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Attualità',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Videogiochi',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Sport',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Cronaca',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Informatica',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Cucina',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Politica',
                'description'   => 'Lorem picsum',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}