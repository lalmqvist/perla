<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('payment');
            $table->string('delivery')->nullable($value = true);
            $table->boolean('completed')->default(false);
            $table->string('phone');
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('street1');
            $table->string('street2')->nullable($value = true);
            $table->string('zip');
            $table->string('city');
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
        Schema::dropIfExists('orders');
    }
}
