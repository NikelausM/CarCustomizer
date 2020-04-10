<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorColorPalettesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('interior_color_palettes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('url');
      $table->unsignedInteger('color_id');
      $table->unsignedInteger('color_palette_id');
      $table->timestamps();
    });

    // Add Foreign keys
    Schema::table('interior_color_palettes', function (Blueprint $table) {
      $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('color_palette_id')->references('id')->on('color_palettes')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('interior_color_palettes');
  }
}
