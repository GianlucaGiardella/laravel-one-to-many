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
                'name'          => 'Front-End',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Back-End',
                'description'   => 'Lorem picsum',
            ],
            [
                'name'          => 'Full Stack',
                'description'   => 'Lorem picsum',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}