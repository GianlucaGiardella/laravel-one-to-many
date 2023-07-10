<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        $types = [
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

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}