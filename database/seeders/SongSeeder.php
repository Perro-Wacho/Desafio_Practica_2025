<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Factory as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Song::create([
                'title' => $faker->sentence(3), // Título de la canción
                'album_id' => rand(1, 5), // ID de un álbum existente
                'duration' => $faker->time($format = 'i:s'), // Duración aleatoria
                'cover' => $faker->imageUrl(400, 400, 'abstract', true, 'cover'), // Imagen de carátula aleatoria
                'file' => $faker->url(), // Ruta ficticia del archivo
            ]);
        }
    }
}
