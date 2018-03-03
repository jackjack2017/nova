<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'article' => '651011',
                'color' => 'red',
                'size' => 'L',
                'product_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'article' => '651012',
                'color' => 'red',
                'size' => 'M',
                'product_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'article' => '651013',
                'color' => 'green',
                'size' => 'M',
                'product_id' => 1,
            ),
        ));
        
        
    }
}