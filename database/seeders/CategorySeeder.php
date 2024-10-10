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
        // Category::factory(3)->create();

        Category::create([
            'name' => 'ウエブデザイン',
            'slug' => 'web-design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'ユーザーインターフェース/ユーザーエクスペリエンス',
            'slug' => 'ui-ux',
            'color' => 'green'
        ]);
        
        Category::create([
            'name' => '機械学習', 
            'slug' => 'machine-learning',
            'color' => 'yellow'
        ]);
        
        Category::create([
            'name' => 'データ構造',
            'slug' => 'data-structure',
            'color' => 'purple'
        ]);
    }
}
