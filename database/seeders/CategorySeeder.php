<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $categories = [
            ['category_id' => 'CAT-000001', 'category_name' => 'Hand Bouquet', 'category_description' => 'Bouquets by HandMade'],
            ['category_id' => 'CAT-000002', 'category_name' => 'Custom Bouquet', 'category_description' => 'Bouquets for custom order'],
            ['category_id' => 'CAT-000003', 'category_name' => 'Money Bouquet', 'category_description' => 'Bouquets from money'],

        ];

        // DB::table('category')->insert($categories);

        // $faker = \Faker\Factory::create();
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
