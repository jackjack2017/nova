<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-01-24 18:43:30',
                'updated_at' => '2018-01-24 18:43:30',
                'name' => 'GreatAdmin',
                'email' => 'admin@la.fr',
                'password' => '$2y$10$Ml4.fL1GKkmrIdEI34Y08ugb5fnaMgqO41wD.HGS4vLyorYp1x07a',
                'remember_token' => 'gYfsJz6cG4',
                'role' => 'admin',
                'valid' => 1,
                'confirmed' => 1,
                'confirmation_code' => NULL,
            ),
        ));
        
        
    }
}