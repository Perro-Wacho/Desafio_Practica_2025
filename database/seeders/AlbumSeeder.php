<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use Faker\Factory as Faker;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Album::create([
                'title' => $faker->sentence(2), // Título de álbum
                'release_year' => $faker->year(), // Año de lanzamiento
            ]);
        }
    }
}
