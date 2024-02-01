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
        /*
            $table->id();
            $table->string("titolo");
            $table->text("descrizione");
            $table->string("immagine");
            $table->tinyInteger("prezzo");
            $table->string("serie");
            $table->date("data_uscita");
            $table->string("tipo");
            $table->string("artista");
            $table->string("autore");
            $table->timestamps();*/
        $comic = config("comic");
        foreach($comic as $comics){
            $newcomics = new Comic();
            $newcomics->titolo = $comics["titolo"];
            $newcomics->descrizione = $comics["descrizione"];
            $newcomics->immagine = $comics["immagine"];
            $newcomics->prezzo = $comics["prezzo"];
            $newcomics->serie = $comics["serie"];
            $newcomics->data_uscita = $comics["data_uscita"];
            $newcomics->tipo = $comics["tipo"];
            $newcomics->artista = $comics["artista"];
            $newcomics->autore = $comics["autore"];
            $newcomics->save();
        }

     


    }
}
