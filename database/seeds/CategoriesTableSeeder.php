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
                'active' => 1,
                'name' => 'Женщины',
                'slug' => 'gg',
                'description' => 'base',
                'created_at' => NULL,
                'updated_at' => NULL,
                'parent_id' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'active' => 1,
                'name' => 'Мужчины',
                'slug' => 'ьь',
                'description' => 'base',
                'created_at' => NULL,
                'updated_at' => NULL,
                'parent_id' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'active' => 1,
                'name' => 'Дети',
                'slug' => 'cc',
                'description' => 'base',
                'created_at' => NULL,
                'updated_at' => NULL,
                'parent_id' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'active' => 1,
                'name' => 'Брюки',
                'slug' => 'bryuki',
                'description' => 'Шикарные брюки',
                'created_at' => '2018-02-27 11:35:37',
                'updated_at' => '2018-02-27 11:35:37',
                'parent_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'active' => 1,
                'name' => 'Верхняя одежда',
                'slug' => 'verkhnyaya-odezhda',
                'description' => 'ыва',
                'created_at' => '2018-03-08 12:24:48',
                'updated_at' => '2018-03-08 12:24:48',
                'parent_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'active' => 1,
                'name' => 'Платья',
                'slug' => 'platya',
                'description' => 'Составляйте стильные ансамбли с белоснежными рубашками, прозрачными блузками и легкими туниками. Чтобы создать всегда актуальный и безупречный образ, который легко преобразить, сочетайте любимые изделия с подходящими аксессуарами.',
                'created_at' => '2018-02-27 11:23:55',
                'updated_at' => '2018-02-27 13:31:59',
                'parent_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'active' => 1,
                'name' => 'Свитер',
                'slug' => 'sviter',
                'description' => 'вап',
                'created_at' => '2018-03-20 09:09:22',
                'updated_at' => '2018-03-20 09:09:22',
                'parent_id' => 2,
            ),
            7 => 
            array (
                'id' => 14,
                'active' => 1,
                'name' => 'Брюки',
                'slug' => 'bryuki-2',
                'description' => 'авпав',
                'created_at' => '2018-03-20 09:32:20',
                'updated_at' => '2018-03-20 09:32:20',
                'parent_id' => 2,
            ),
            8 => 
            array (
                'id' => 15,
                'active' => 1,
                'name' => 'Куртки и пальто',
                'slug' => 'kurtki-i-palto-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:30:56',
                'updated_at' => '2018-03-20 15:30:56',
                'parent_id' => 1,
            ),
            9 => 
            array (
                'id' => 16,
                'active' => 1,
                'name' => 'Трикотаж',
                'slug' => 'trikotazh-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:31:10',
                'updated_at' => '2018-03-20 15:31:10',
                'parent_id' => 1,
            ),
            10 => 
            array (
                'id' => 17,
                'active' => 1,
                'name' => 'Кардиганы и джемперы',
                'slug' => 'kardigany-i-dzhempery-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:31:20',
                'updated_at' => '2018-03-20 15:31:20',
                'parent_id' => 1,
            ),
            11 => 
            array (
                'id' => 18,
                'active' => 1,
                'name' => 'Рубашки и брюки',
                'slug' => 'rubashki-i-bryuki-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:31:30',
                'updated_at' => '2018-03-20 15:31:30',
                'parent_id' => 1,
            ),
            12 => 
            array (
                'id' => 19,
                'active' => 1,
                'name' => 'Топы',
                'slug' => 'topy-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:31:41',
                'updated_at' => '2018-03-20 15:31:41',
                'parent_id' => 1,
            ),
            13 => 
            array (
                'id' => 20,
                'active' => 1,
                'name' => 'Пиджаки и жилеты',
                'slug' => 'pidzhaki-i-zhilety-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:31:51',
                'updated_at' => '2018-03-20 15:31:51',
                'parent_id' => 1,
            ),
            14 => 
            array (
                'id' => 21,
                'active' => 1,
                'name' => 'Джинсы',
                'slug' => 'dzhinsy-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:00',
                'updated_at' => '2018-03-20 15:32:00',
                'parent_id' => 1,
            ),
            15 => 
            array (
                'id' => 22,
                'active' => 1,
                'name' => 'Аксессуары',
                'slug' => 'aksessuary-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:11',
                'updated_at' => '2018-03-20 15:32:11',
                'parent_id' => 1,
            ),
            16 => 
            array (
                'id' => 23,
                'active' => 1,
                'name' => 'Одежда для сна',
                'slug' => 'odezhda-dlya-sna-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:22',
                'updated_at' => '2018-03-20 15:32:22',
                'parent_id' => 1,
            ),
            17 => 
            array (
                'id' => 24,
                'active' => 1,
                'name' => 'Купальники',
                'slug' => 'kupalniki-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:30',
                'updated_at' => '2018-03-20 15:32:30',
                'parent_id' => 1,
            ),
            18 => 
            array (
                'id' => 25,
                'active' => 1,
                'name' => 'Спортивная одежда',
                'slug' => 'sportivnaya-odezhda-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:39',
                'updated_at' => '2018-03-20 15:32:39',
                'parent_id' => 1,
            ),
            19 => 
            array (
                'id' => 26,
                'active' => 1,
                'name' => 'Одежда для беременных',
                'slug' => 'odezhda-dlya-beremennykh-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:47',
                'updated_at' => '2018-03-20 15:32:47',
                'parent_id' => 1,
            ),
            20 => 
            array (
                'id' => 27,
                'active' => 1,
                'name' => 'Большие размеры',
                'slug' => 'bolshie-razmery-1',
                'description' => 'цукцук',
                'created_at' => '2018-03-20 15:32:58',
                'updated_at' => '2018-03-20 15:32:58',
                'parent_id' => 1,
            ),
        ));
        
        
    }
}