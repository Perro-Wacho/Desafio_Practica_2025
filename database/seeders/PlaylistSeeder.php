<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Playlist;
use Faker\Factory as Faker;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3; $i++) {
            Playlist::create([
                'name' => $faker->sentence(2), // Nombre de la playlist
                'description' => $faker->paragraph(), // Descripción de la playlist
            ]);
        }
    }
}
