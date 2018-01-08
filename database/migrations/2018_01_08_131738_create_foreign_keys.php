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

        Schema::table('ads_category', function (Blueprint $table) {
                    
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
        });

        Schema::table('ads_charity', function (Blueprint $table) {
                    
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->foreign('charity_id')->references('id')->on('charities')->onDelete('cascade');
        });

        Schema::table('img_ads', function (Blueprint $table) {
                    
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
        });

        Schema::table('order_ads', function (Blueprint $table) {
                    
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        Schema::table('orders', function (Blueprint $table) {
                    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('users_ads', function (Blueprint $table) {
                    
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
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
