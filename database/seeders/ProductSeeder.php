<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultProducts = [
            [
                'name' => 'Santa Hat',
                'image_url' => 'https://i.pinimg.com/originals/11/c6/2c/11c62c3946a0485b0a4bff9da5f6b729.png',
                'price' => 4.99,
                'stock' => 35,
                'delete_flag' => false
            ],
            [
                'name' => 'Clarinet',
                'image_url' => 'https://www.normans.co.uk/images/product/large/12819_2_.jpg',
                'price' => 9.99,
                'stock' => 31,
                'delete_flag' => false
            ],
            [
                'name' => 'Martin Boot',
                'image_url' => 'https://i1.adis.ws/i/drmartens/11821006.80.jpg?$medium$',
                'price' => 45.99,
                'stock' => 19,
                'delete_flag' => false
            ],
            [
                'name' => 'Hulk TShirt',
                'image_url' => 'https://ae01.alicdn.com/kf/HTB1LxVjKFXXXXa4XVXXq6xXFXXXT/Incredible-Hulk-T-Shirt-Halloween-Spirit-3D-Print-t-shirt-Women-Men-Fashion-Clothing-Outfits-tees.jpg',
                'price' => 1.99,
                'stock' => 77,
                'delete_flag' => false
            ],
        ];

        foreach($defaultProducts as $product) {
            DB::table('products')->insert($product);
        }
    }
}
