<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('product');
            $table->string('card_no');
            $table->string('amt');
            $table->string('status');
            $table->string('pay_date');
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
        Schema::dropIfExists('payment_models');
    }
}
