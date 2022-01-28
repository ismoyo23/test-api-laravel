<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApiDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         // table product detail
         Schema::create('tbl_detail', function (Blueprint $table) {
            $table->integer('id_detail')->autoIncrement();
            $table->string('name_product');
            $table->text('description');
            $table->timestamps();


            
        });


        // table category
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->integer('id_category')->autoIncrement();
            $table->string('name_category');
            $table->timestamps();
        });


        // table product

        Schema::create('tbl_product', function (Blueprint $table) {
            $table->integer('id_product')->autoIncrement();
            $table->integer('id_detail_product');
            $table->integer('id_category_product');
            $table->timestamps();

            $table->foreign('id_detail_product')->references('id_detail')->on('tbl_detail');
            $table->foreign('id_category_product')->references('id_category')->on('tbl_category');
        });


       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
        Schema::dropIfExists('tbl_detail');
        Schema::dropIfExists('tbl_category');
    }
}
