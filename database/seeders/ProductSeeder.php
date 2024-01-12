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
                'ProductID' => 'P0001',
                'ProductName' => 'Happy Birthday Bouquet',
                'ProductDescription' => 'A beautiful bouquet to celebrate birthdays',
                'ProductPrice' => 25,
                'CategoryID' => 'CA001',
                'ProductImageURL' => 'D:/Dev/Laravel/Bouquet/bouquet-app2/public/images/collections/Custom Bouquet/bouquet image (2).jpg',
            ],
            [
                'ProductID' => 'P0002',
                'ProductName' => 'Eternal Love Bouquet',
                'ProductDescription' => 'Express your love with this romantic bouquet',
                'ProductPrice' => 35,
                'CategoryID' => 'CA002',
                'ProductImageURL' => 'D:/Dev/Laravel/Bouquet/bouquet-app2/public/images/collections/Custom Bouquet/bouquet image (1).jpg',
            ],
            // Add more products as needed

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
