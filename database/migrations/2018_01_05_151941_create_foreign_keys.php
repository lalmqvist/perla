<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // // Schema::enableForeignKeyConstraints();
        // Schema::table('ads_category', function (Blueprint $table) {
                    
        //     $table->foreign('category_id')->references('id')->on('categories');
        //     $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
        // })::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
