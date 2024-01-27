<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_id' => 'PD-0000001',
                'product_name' => 'Happy Birthday Bouquet',
                'product_description' => 'A beautiful bouquet to celebrate birthdays',
                'product_price' => 25,
                'category_id' => 'CAT-000002',
                'product_image_url' => 'D:/Dev/Laravel/Bouquet/bouquet-app2/public/images/collections/Custom Bouquet/bouquet image (2).jpg',
            ],
            [
                'product_id' => 'PD-0000002',
                'product_name' => 'Eternal Love Bouquet',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 35,
                'category_id' => 'CAT-000001',
                'product_image_url' => 'D:/Dev/Laravel/Bouquet/bouquet-app2/public/images/collections/Custom Bouquet/bouquet image (1).jpg',
            ],
            // Add more products as needed

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
