<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEatlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eatlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shopname');
            $table->float('score',8, 2);
            $table->string('reserve_tel');
            $table->string('reserve_judgment');
            $table->text('address');
            $table->text('business_hours');
            $table->string('payment_method');
            $table->string('service_charge');
            $table->string('private_room');
            $table->string('smoking_judgment');
            $table->string('parking');
            $table->string('hp');
            $table->string('shoptel');
            $table->string('eatlogurl');
            $table->text('img');
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
        Schema::dropIfExists('eatlogs');
    }
}
