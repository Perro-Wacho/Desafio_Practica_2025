<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('playlist_songs')->insert([
                'playlist_id' => rand(1, 3), // ID de una playlist existente
                'song_id' => rand(1, 20), // ID de una canción existente
            ]);
        }
    }
}
