<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorPalettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_palettes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('automobile_id');
            $table->timestamps();
        });

        // Add Foreign keys
        Schema::table('color_palettes', function (Blueprint $table) {
          $table->foreign('automobile_id')->references('id')->on('automobiles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_palettes');
    }
}
