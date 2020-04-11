<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('billing_address');
            $table->unsignedInteger('telephone_during_day');
            $table->unsignedInteger('telephone_during_evening');
            $table->string('email');
            $table->string('payment_status');
            $table->unsignedInteger('designated_sales_person');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        // Add Foreign keys
        Schema::table('customer_records', function (Blueprint $table) {
          $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_records');
    }
}
