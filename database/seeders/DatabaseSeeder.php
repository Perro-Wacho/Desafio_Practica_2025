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
        $this->call([
            AdminSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            GenreSeeder::class,
            PlaylistSeeder::class,
            PlaylistSongSeeder::class,
        ]);
    }
}
