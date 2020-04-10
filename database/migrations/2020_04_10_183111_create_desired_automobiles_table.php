<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesiredAutomobilesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('desired_automobiles', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('exterior_color_palette_id');
      $table->unsignedInteger('interior_color_palette_id');
      $table->unsignedInteger('listed_sale_price');
      $table->unsignedInteger('actual_sale_price');
      $table->unsignedInteger('discount');
      $table->string('discount_rationale');
      $table->unsignedInteger('automobile_id');
      $table->unsignedInteger('customer_record_id');
      $table->timestamps();
    });

    // Add Foreign keys
    Schema::table('desired_automobiles', function (Blueprint $table) {
      $table->foreign('automobile_id')->references('id')->on('automobiles')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('customer_record_id')->references('id')->on('customer_records')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('desired_automobiles');
  }
}
