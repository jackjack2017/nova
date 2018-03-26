<?php

use App\Models\Category;
use App\Models\Product;
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
        
//        \DB::table('products')->insert(array (
//            0 =>
//            array (
//                'id' => 1,
//                'name' => 'Красивые штанишки',
//                'price' => '9000',
//                'article' => '123456',
//                'size' => 'L',
//                'color' => 'red',
//                'discount' => NULL,
//                'price_with_discount' => NULL,
//                'description' => 'описание описание',
//                'category_id' => 4,
//                'brand' => 'габанна',
//                'season' => 'лето',
//                'style' => 'спорт',
//                'textile' => 'тест',
//                'comment' => NULL,
//                'gender' => '1',
//                'slug' => 'krasivye-shtanishki',
//                'new' => 1,
//                'main' => 1,
//                'top' => 1,
//                'active' => 1,
//                'created_at' => '2018-02-27 13:26:12',
//                'updated_at' => '2018-03-03 13:19:25',
//            ),
//        ));

        $nth_products_in_category = 60;
        foreach(Category::all() as $category)
        {
            if($category->id != 1 && $category->id != 2 && $category->id != 3) {


                for ($i = 0; $i < $nth_products_in_category; $i++) {
                    factory(Product::class)->create([
                        'category_id' => $category['id']
                    ]);
                }
            }
        }
    }
}