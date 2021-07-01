<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();

            $table->char('titolo', 100)->nullable();
            $table->smallInteger('prezzo')->nullable();
            $table->char('destinazione', 100)->nullable();
            $table->tinyInteger('min_ospiti');
            $table->tinyInteger('max_ospiti');
            $table->char('mezzo_di_trasporto', 50);
            // $table->tinyInteger('mese_selezionato', 12)->;
            $table->text('descrizione');  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel');
    }
}
