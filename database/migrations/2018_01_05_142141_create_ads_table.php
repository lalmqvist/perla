<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title', 100);
            $table->integer('price');
            $table->string('brand');
            $table->string('type');
            $table->string('size')->nullable($value = true);
            $table->string('color')->nullable($value = true);
            $table->string('material')->nullable($value = true);
            $table->string('condition');
            $table->string('other')->nullable($value = true);
            $table->string('thumb');
            $table->boolean('active')->default(true);
            $table->text('keywords')->nullable($value = true);
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
        Schema::dropIfExists('ads');
    }
}
