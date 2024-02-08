<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

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
                'product_id' => 'P-00000001',
                'product_name' => 'Happy Birthday Bouquet 1',
                'product_description' => 'A beautiful bouquet to celebrate birthdays',
                'product_price' => 223000,
                'category_id' => 'CAT-000002',
                'product_image_url' => '1707317080_IMG_1843.jpg',
            ],
            [
                'product_id' => 'P-00000002',
                'product_name' => 'Eternal Love Bouquet 2',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 1020000,
                'category_id' => 'CAT-000001',
                'product_image_url' => '1707317014_IMG_5284_jpg.jpg',
            ],
            [
                'product_id' => 'P-00000003',
                'product_name' => 'Eternal Love Bouquet 3',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 1300000,
                'category_id' => 'CAT-000001',
                'product_image_url' => '1707317070_IMG_9785.jpg',
            ],
            [
                'product_id' => 'P-00000004',
                'product_name' => 'Eternal Love Bouquet 44',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 172000,
                'category_id' => 'CAT-000002',
                'product_image_url' => '1707317074_IMG_9935.PNG',
            ],
            [
                'product_id' => 'P-00000005',
                'product_name' => 'Eternal Love Bouquet adadadad',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 121000,
                'category_id' => 'CAT-000002',
                'product_image_url' => '1707317093_IMG_8295_jpg.jpg',
            ],
            [
                'product_id' => 'P-00000006',
                'product_name' => 'Eternal Love Bouquet gfgfkakdkadkadkad',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 35000,
                'category_id' => 'CAT-000001',
                'product_image_url' => '1707317047_IMG_9930.PNG',
            ],
            [
                'product_id' => 'P-00000007',
                'product_name' => 'Eternal Love Bouquet awdkadkakdakdkadad',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 700000,
                'category_id' => 'CAT-000001',
                'product_image_url' => '1707317066_IMG_4046_jpg.jpg',
            ],
            [
                'product_id' => 'P-00000008',
                'product_name' => 'Eternal Love Bouquet 9239239adjkajcjaewjradaw',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 175000,
                'category_id' => 'CAT-000003',
                'product_image_url' => '1707317063_IMG_5612.jpg',
            ],
            [
                'product_id' => 'P-00000009',
                'product_name' => 'Eternal Love Bouquet 77',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 170000,
                'category_id' => 'CAT-000002',
                'product_image_url' => '1707317047_IMG_9930.PNG',
            ],
            [
                'product_id' => 'P-00000010',
                'product_name' => 'Eternal Love Bouquet',
                'product_description' => 'Express your love with this romantic bouquet awdadadad',
                'product_price' => 450000,
                'category_id' => 'CAT-000001',
                'product_image_url' => '1707317074_IMG_9935.PNG',
            ],
            [
                'product_id' => 'P-00000011',
                'product_name' => 'Eternal Love Bouquet',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 350000,
                'category_id' => 'CAT-000002',
                'product_image_url' => '1707317074_IMG_9935.PNG',
            ],
            [
                'product_id' => 'P-00000012',
                'product_name' => 'Eternal Love Bouquet',
                'product_description' => 'Express your love with this romantic bouquet',
                'product_price' => 120000,
                'category_id' => 'CAT-000003',
                'product_image_url' => '1707317074_IMG_9935.PNG',
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // $faker = \Faker\Factory::create();
        // for( $i = 0; $i < 15; $i++ ) {
        //     $newID = UniqueIdGenerator::generate(['table' => 'products', 'field' => 'product_id', 'length' => 10, 'prefix' => 'P-']);
        //     $randNumber = rand(1, 10);
        //     $category_id = sprintf('CAT-%06s', $randNumber);

        //     Product::create([
        //         'product_id' => $newID,
        //         'product_name' => $faker->name,
        //         'product_description' => $faker->sentence,
        //         'product_price' => $faker->numberBetween(0, 100),
        //         'category_id' => $category_id,
        //         'product_image_url' => $faker->sentence
        //     ]);
        // }
    }
}
