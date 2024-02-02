<?php

namespace Database\Seeders;

use App\Models\Comic;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic_db');

        foreach ($comics as $comicss) {

            $NewComic = new Comic();

            $NewComic->titolo = $comicss["title"];
            $NewComic->descrizione = $comicss["description"];
            $NewComic->immagine = $comicss["thumb"];
            $NewComic->prezzo = $comicss["price"];
            $NewComic->serie = $comicss["series"];
            $NewComic->data_uscita = $comicss["sale_date"];
            $NewComic->tipo = $comicss["type"];

            $NewComic->save();
        }
    }
}
