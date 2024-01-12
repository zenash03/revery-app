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
            ['CategoryID' => 'CA001', 'CategoryName' => 'Hand Bouquet', 'CategoryDescription' => 'Bouquets by HandMade'],
            ['CategoryID' => 'CA002', 'CategoryName' => 'Custom Bouquet', 'CategoryDescription' => 'Bouquets for custom order'],
            ['CategoryID' => 'CA003', 'CategoryName' => 'Money Bouquet', 'CategoryDescription' => 'Bouquets from money'],

        ];

        // DB::table('category')->insert($categories);

        // $faker = \Faker\Factory::create();
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
