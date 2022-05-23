<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeOfPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mode_of_payment', function (Blueprint $table) {




            
            $table->id();
            $table->integer('cash')->default(0);
            $table->integer('cheque')->default(0);
            $table->integer('card')->default(0);
            $table->integer('mpesa')->default(0);
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
        Schema::dropIfExists('mode_of_payment');
    }
}
