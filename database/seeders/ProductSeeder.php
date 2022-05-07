<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Product;

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
                'name' => 'سامسونگ گلکسی',
                'description' => 'برند سامسونگ',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'price' => 100
            ],
            [
                'name' => 'اپل آیفون 12',
                'description' => 'برند اپل',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'price' => 500
            ],
            [
                'name' => 'گوگل پیکسل',
                'description' => 'برند گوگل پیکسل',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'price' => 400
            ],
            [
                'name' => 'گوشی LG ',
                'description' => 'برند LG',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'price' => 200
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
