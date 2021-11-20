<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Factories\HasFactory;


class DatabaseSeeder extends Seeder
{
//     use HasApiTokens, HasFactory, Notifiable;
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