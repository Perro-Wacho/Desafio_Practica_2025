<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Pop', 'Rock', 'Jazz', 'Classical', 'Hip-Hop', 'Reggae', 'Electronic'];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre, // Nombres de géneros
            ]);
        }
    }
}
