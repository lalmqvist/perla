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

        Schema::table('ads_categories', function (Blueprint $table) {
                    
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
        });

        Schema::table('ads_charities', function (Blueprint $table) {
                    
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
        });

        Schema::table('ads', function (Blueprint $table) {
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
        Schema::table('ads_categories', function (Blueprint $table) {
                    
            $table->dropForeign('ads_categories_category_id_foreign');
            $table->dropForeign('ads_categories_ad_id_foreign');
        });

        Schema::table('ads_charities', function (Blueprint $table) {
                    
            $table->dropForeign('ads_charities_ad_id_foreign');
            $table->dropForeign('ads_charities_charity_id_foreign');

        });

        Schema::table('img_ads', function (Blueprint $table) {
                    
            $table->dropForeign('img_ads_ad_id_foreign');

        });

        Schema::table('order_ads', function (Blueprint $table) {
                    
            $table->dropForeign('order_ads_ad_id_foreign');
            $table->dropForeign('order_ads_order_id_foreign');

        });

        Schema::table('orders', function (Blueprint $table) {
                    
            $table->dropForeign('orders_user_id_foreign');

        });

        Schema::table('ads', function (Blueprint $table) {
            $table->dropForeign('ads_user_id_foreign');

        });
    }
}
