<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::create(
            [
                'name' => 'GreatAdmin',
                'email' => 'admin@la.fr',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'valid' => true,
                'confirmed' => true,
                'remember_token' => str_random(10),
            ]
        );
    }
}
