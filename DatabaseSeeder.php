<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
        // factory(App\Models\Blog::class)->create();
       
       $this->call(BlogsTableSeeder::class);
        // $this->call
        // (BlogsTableSeeder::class);

    }
}
