<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModesOfPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modes_of_payment', function (Blueprint $table) {

            $table->id();
            $table->string('type');
            $table->timestamps();


        });

        DB::table('modes_of_payment')->insert(
         
            array(array('type' => 'Cash'),
                  array('type' => 'Cheque'),
                  array('type' => 'Card'),
                  array('type' => 'Mpesa'))
                );



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modes_of_payment');
    }
}
