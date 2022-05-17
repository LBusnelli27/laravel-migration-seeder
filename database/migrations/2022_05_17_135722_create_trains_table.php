<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->text('azienda', 100);
            $table->text('stazione_partenza', 100);
            $table->text('stazione_arrivo', 100);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->smallInteger('codice');
            $table->tinyInteger('n_carrozze');
            $table->boolean('is_in_orario');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
}
