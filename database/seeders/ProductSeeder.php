<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
             [
                'name' => 'Realme',
                "price" =>"200",
                "description" => "5g Smartphone with 4gb ram and many more.....",
                "category" =>"mobile",
                "gallery" =>"https://img.giznext.com/assets/model/5/230/realme-mobiles-realme-xt-0-1635273562.jpg"

             ],
                          [
                'name' => 'Oppo Renno 7',
                "price" =>"300",
                "description" => "Smartphone with best camera and more.....",
                "category" =>"mobile",
                "gallery" =>"https://technave.com/data/files/article/202202220646037439.jpg"

             ],
                          [
                'name' => 'Sony Bravia',
                "price" =>"600",
                "description" => "Smart Tv with inbuilt android and many more.....",
                "category" =>"Television",
                "gallery" =>"https://assets.mspimages.in/wp-content/uploads/2021/08/Sony-Bravia-85-inch-smart-TV.jpg"

             ],
                          [
                'name' => 'Lg Fridge',
                "price" =>"500",
                "description" => "Fridge with smart cooling and many more.....",
                "category" =>"fridge",
                "gallery" =>"https://m.media-amazon.com/images/I/71L31J1HZ6S._SL1500_.jpg"

             ],

        ]);
        
    }
}
