<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('charity_fields', function (Blueprint $table) {
                    
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->foreign('charity_id')->references('id')->on('charities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('charity_fields', function (Blueprint $table) {
                    
            $table->dropForeign('charity_fields_field_id_foreign');
            $table->dropForeign('charity_fields_charity_id_foreign');
        });
    }
}
