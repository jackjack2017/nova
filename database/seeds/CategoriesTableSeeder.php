<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-02-27 11:23:55',
                'updated_at' => '2018-02-27 13:31:59',
                'slug' => 'platya',
                'name' => 'Платья',
                'active' => 1,
                'description' => 'Составляйте стильные ансамбли с белоснежными рубашками, прозрачными блузками и легкими туниками. Чтобы создать всегда актуальный и безупречный образ, который легко преобразить, сочетайте любимые изделия с подходящими аксессуарами.',
            ),
            1 => 
            array (
                'id' => 4,
                'created_at' => '2018-02-27 11:35:37',
                'updated_at' => '2018-02-27 11:35:37',
                'slug' => 'bryuki',
                'name' => 'Брюки',
                'active' => 1,
                'description' => 'Шикарные брюки',
            ),
        ));
        
        
    }
}