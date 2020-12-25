<?php

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
        $this->call(genreseeder::class);
        $this->call(movieseeder::class);
        $this->call(episodeseeder::class);
    }
}
