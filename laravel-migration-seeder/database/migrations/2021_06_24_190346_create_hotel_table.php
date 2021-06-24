<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            // id generato automaticamente da Laravel -> Anche il "bigIncrement" è automatico?
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("chain");
            // $table->

            // Laravel crea questi due campi: "created_at" & "updated_at"
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
        Schema::dropIfExists('hotel');
    }
}
