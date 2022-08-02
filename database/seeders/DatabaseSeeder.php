<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
       DB::table('posts')->insert([
        'author' => 'John Doe',
        'title' => 'Test Title',
        'body' => 'lore ipsum dolor sit amet',
        'cover' => 'https://picsum.photos/id/1/200/300',
        'created_at' => now(),
        'updated_at' => now(),
   ]);
    }
}
