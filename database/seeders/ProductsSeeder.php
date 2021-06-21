<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            // [
            //     'name'=>'Samsung Galaxy A12',
            //     'price'=>'KSH. 12,000.00',
            //     'category'=>'Phones & Accessories',
            //     'description'=>'4GB RAM, 128GB ROM, 48 megapixel water drop front camera',
            //     'gallery'=>'https://sp.yimg.com/ib/th?id=OP.Qaqt1DJ86iFeKg474C474&o=5&pid=21.1'
            // ],
            // [
            //     'name'=>'Hisense Tv',
            //     'price'=>'KSH. 50,000.00',
            //     'category'=>'Home Appliances',
            //     'description'=>'57 inch Led display android ',
            //     'gallery'=>'https://tse1.mm.bing.net/th?id=OIP.ECqlTV2BbwNi1CD4_ndafwHaHa&pid=Api&P=0&w=300&h=300'
            // ],
            // [
            //     'name'=>'Calvin Klein Male watch',
            //     'price'=>'KSH. 2,000.00',
            //     'category'=>'Fashion Accessiories',
            //     'description'=>'Superlative Chronometer water resist',
            //     'gallery'=>'https://sp.yimg.com/ib/th?id=OP.xbkrHaUNdwRzXw474C474&o=5&pid=21.1'
            // ],
            // [
            //     'name'=>'HP EliteBook 8440p',
            //     'price'=>'KSH. 23,000.00',
            //     'category'=>'Computers',
            //     'description'=>'4GB RAM, 500GB HDD, 15 inch display',
            //     'gallery'=>'https://tse4.mm.bing.net/th?id=OIP.10E4RbrZL2KOYMjyuCkLwwHaFj&pid=Api&P=0&w=210&h=158'
            // ],
            [
                'name'=>'Male Italian 3-pc suit',
                'price'=>'KSH. 11,000.00',
                'category'=>'Clothing',
                'description'=>'Size 55 with tie and belt',
                'gallery'=>'https://sp.yimg.com/ib/th?id=OP.c%2bQHeocmG3hK8Q474C474&o=5&pid=21.1&bw=0&bc=FFFFFF'
            ]
        );
    }
}
