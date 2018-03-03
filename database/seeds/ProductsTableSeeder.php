<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Красивые штанишки',
                'price' => '9000',
                'discount' => NULL,
                'price_with_discount' => NULL,
                'description' => 'описание описание',
                'category_id' => 4,
                'brand' => 'габанна',
                'season' => 'лето',
                'style' => 'спорт',
                'textile' => 'тест',
                'comment' => NULL,
                'gender' => '1',
                'new' => 1,
                'top' => 1,
                'slug' => 'krasivye-shtanishki',
                'active' => 1,
                'created_at' => '2018-02-27 13:26:12',
                'updated_at' => '2018-02-27 13:41:50',
            ),
        ));
        
        
    }
}