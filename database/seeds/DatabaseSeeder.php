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
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
