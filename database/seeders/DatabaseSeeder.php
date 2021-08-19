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
        // \App\Models\User::factory(10)->create();
    }
}

// DB::table('cards')->insert(['title' => 'My First Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
// DB::table('cards')->insert(['title' => 'My Second Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);

// DB::table('cards')->where('title', 'My New Card')->delete();