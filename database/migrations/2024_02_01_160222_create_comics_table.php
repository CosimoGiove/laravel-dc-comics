<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('titolo', 100);
            $table->text('descrizione');
            $table->string('immagine', 2000)->nullable();
            $table->string('prezzo',10);
            $table->string('serie', 100);
            $table->date('data_uscita');
            $table->string('tipo', 100);
            $table->timestamps();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
